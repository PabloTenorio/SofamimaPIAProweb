<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function main() {
        return view('rol.main');
    }

    public function create() {
        return view('rol.create');
    }

    public function store(Request $request) {
        $rol = new roles();
        $rol->id = $request->id;
        $rol->rol = $request->rol;
        $rol->save();
        return redirect()->route('rol.main');
    }

    public function edit($id) {
        return view('rol.edit');
    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
