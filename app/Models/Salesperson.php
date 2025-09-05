<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Salesperson implements AuthenticatableContract
{
    use Authenticatable;

    public string $id;
    public string $name;
    public ?string $password; // contraseña encriptada legado
    public int $conectado;

    // Dummy remember_token para evitar error en logout
    public ?string $remember_token = null;

    public static function fromDbRow(object $row): self
    {
        $u = new self();
        $u->id        = (string) $row->SALESPERID;
        $u->name      = (string) ($row->SALESPERNAME ?? '');
        $u->password  = (string) ($row->PASSWORD ?? '');
        $u->conectado = (int) ($row->Conectado ?? 0);
        return $u;
    }

    // Laravel usará este para validar:
    public function getAuthIdentifierName()
    {
        return 'SALESPERID';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    // Métodos para desactivar el remember_token
    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value): void
    {
        // No hacemos nada, no usamos remember me
    }

    public function getRememberTokenName(): string
    {
        return 'remember_token';
    }
}
