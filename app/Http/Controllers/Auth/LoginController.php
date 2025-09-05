<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Salesperson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    public function store(Request $request) {
        // 🔹 Validación manual con Validator
        $validator = Validator::make($request->all(), [
            'salesperid' => 'required|string',
            'password'   => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // 🔹 Ahora intentamos autenticar
        if (Auth::guard('web')->attempt($request->only('salesperid', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()
            ->withErrors(['salesperid' => 'Credenciales inválidas'])
            ->onlyInput('salesperid');
    }

    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'salesperid' => ['required','string'],
            'password'   => ['required','string'],
        ]);

        // Lee al usuario desde la BD (usa tu conexión correcta)
        $row = DB::table('OP_SALESPERSON')
            ->where('SALESPERID', $data['salesperid'])
            ->first();

        if (!$row) {
            throw ValidationException::withMessages([
                'salesperid' => 'Usuario no encontrado.',
            ]);
        }

        // si quieres un objeto fuertemente tipado:
        $user = Salesperson::fromDbRow($row);

        // ¿ya conectado?
        if ((int)($row->Conectado ?? 0) === 1) {
            throw ValidationException::withMessages([
                'salesperid' => 'Existe una sesión activa para este usuario.',
            ]);
        }

        // Autentica (nuestro UserProvider validará con tu LegacyCrypto)
        if (! Auth::attempt([
            'salesperid' => $data['salesperid'],
            'password'   => $data['password'],
        ], false)) {
            throw ValidationException::withMessages([
                'password' => 'Credenciales incorrectas.',
            ]);
        }

        // marca conectado = 1 (igual que en tu .NET)
        DB::table('OP_SALESPERSON')
            ->where('SALESPERID', $data['salesperid'])
            ->update(['Conectado' => 1]);

        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    public function logout(Request $request){
        $salesperid = optional(Auth::user())->getAuthIdentifier();

        if ($salesperid) {
            DB::table('OP_SALESPERSON')
                ->where('SALESPERID', $salesperid)
                ->update(['Conectado' => 0]);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
