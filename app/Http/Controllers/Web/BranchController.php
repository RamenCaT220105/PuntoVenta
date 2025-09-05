<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        // Dummy data por ahora (luego lo cambiamos a consulta real sies_mysql)
        $branches = collect([
            ['id' => 1, 'code' => 'S001', 'name' => 'Sucursal Centro', 'city' => 'Lima'],
            ['id' => 2, 'code' => 'S002', 'name' => 'Sucursal Norte',  'city' => 'Piura'],
            ['id' => 3, 'code' => 'S003', 'name' => 'Sucursal Sur',    'city' => 'Arequipa'],
        ]);

        return view('branches.index', compact('branches'));
    }

    public function show($id)
    {
        // Placeholder de detalle
        return view('branches.show', ['id' => $id]);
    }
}