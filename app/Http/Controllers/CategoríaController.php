<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoríaController extends Controller
{
    public function main() {
        $categoria = categoria::all();
        $data = [
            'categoria'=>$categoria
        ];
        return view('categoria.main', $data);
    }

    public function create() {
        return view('categoria.create');
    }

    public function store(Request $request) {
        $categoria = new categoria();
        $categoria->id = $request->id;
        $categoria->categoria = $request->categoria;
        $categoria->save();
        return redirect()->route('categoria.main');
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
