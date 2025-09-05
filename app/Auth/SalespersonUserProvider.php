<?php

namespace App\Auth;

use App\Models\Salesperson;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\DB;
use App\Auth\LegacyCrypto;

class SalespersonUserProvider implements UserProvider
{
    // 1) Buscar por ID (clave primaria)
    public function retrieveById($identifier)
    {
        $row = DB::table('OP_SALESPERSON')->where('SALESPERID', $identifier)->first();
        return $row ? Salesperson::fromDbRow($row) : null;
    }

    // 2) Buscar por token “remember me” (si no lo usas, retorna null)
    public function retrieveByToken($identifier, $token)
    {
        return null;
    }

    // 3) Actualizar token “remember me” (si no lo usas, deja vacío)
    public function updateRememberToken(Authenticatable $user, $token)
    {
        // noop
    }

    // 4) Buscar por credenciales del login
    public function retrieveByCredentials(array $credentials)
    {
        // Esperamos 'salesperid' y 'password' desde el form
        $id = $credentials['salesperid'] ?? null;
        if (!$id) {
            return null;
        }

        $row = DB::table('OP_SALESPERSON')->where('SALESPERID', $id)->first();
        return $row ? Salesperson::fromDbRow($row) : null;
    }

    // 5) Validar credenciales con tu cifrado legado
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = $credentials['password'] ?? '';

        // Compara contra el valor guardado en la BD usando tu helper
        // En tu .NET hacías: ComandaPrinterHelper.Encrypt(plain)
        // Aquí usamos LegacyCrypto::encrypt(plain) para comparar
        $encrypted = LegacyCrypto::encrypt($plain);

        return $encrypted === $user->getAuthPassword();
    }

    // 6) **Método nuevo en Laravel 12**. Puedes dejarlo vacío si no re-hasheas aún.
    public function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $force = false): void
    {
        // Como tu password es legado (no bcrypt), no re-hasheamos por ahora.
        // Si más adelante migras a Hash::make(), aquí puedes hacer el rehash.
    }
}