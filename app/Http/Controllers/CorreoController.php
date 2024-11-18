<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function contacto(){
        return view('contacto');
    }

    public function store(Request $request) {
        $correo = new contacto();
        $correo->id = $request->id;
        $correo->nombre = $request->nombre;
        $correo->correo = $request->correo;
        $correo->telefono = $request->telefono;
        $correo->presupuesto = $request->presupuesto;
        $correo->mensaje = $request->mensaje;
        $correo->save();
        return redirect()->route('correo.index');
    }

    public function main(){
        $correo = contacto::all();
        $data = [
            'correo'=>$correo
        ];
        return view('contacto.main', $data);
    }
}
