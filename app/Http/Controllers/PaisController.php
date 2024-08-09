<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;


class PaisController extends Controller
{
    public function Listar(Request $request){
        $paises = Pais::all();
        return $paises;
    }

    public function Insertar(Request $request){
        $pais = new Pais();
        $pais->nombre = $request->nombre;
        $pais->save();
        return $pais;
    }
}
