<?php

namespace App\Http\Controllers;

use App\Models\notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function main() {
        $notas = DB::table('notas as bl')->select(
            'bl.id as id',
            'bl.titulo as titulo',
            'bl.fecha as fecha',
            'bl.texto as texto',
            'bl.imagen1 as imagen1',
            'us.id as id_creador',
            'us.name as creador', 
        )
        ->leftjoin('users as us', 'us.id', '=', 'bl.id_creador')
        ->get();

        return view('blog.main', [
            'notas' => $notas,
        ]);
    }

    public function create() {
        return view('blog.create');
    }

    public function store(Request $request) {
        $blog = new notas();
        $blog->titulo = $request->titulo;
        $blog->fecha = $request->fecha;
        $blog->texto = $request->texto;

        if (auth()->check()) {
            $blog->id_creador = auth()->user()->id;
        }

        if ($request->hasFile('imagen1')) {
            $filename = time().'.'.$request->imagen1->getClientOriginalName();
            $request->imagen1->move(public_path('images/notas'), $filename);
            $blog->imagen1 = $filename;
        }

        $blog->save();
        return redirect()->route('blog.main');
    }

    public function edit($id) {
        $blog = notas::find($id);

        $notas = DB::table('notas as bl')->select(
            'bl.id as id',
            'bl.titulo as titulo',
            'bl.fecha as fecha',
            'bl.texto as texto',
            'bl.imagen1 as imagen1',
            'us.id as id_creador',
            'us.name as creador', 
        )
        ->leftjoin('users as us', 'us.id', '=', 'bl.id_creador')
        ->get();

        return view('blog.edit', [
            'blog' => $blog,
            'notas' => $notas,
        ]);
    }

    public function update(Request $request, $id) {
        $blog = notas::find($id);
        $blog->titulo = $request->titulo;
        $blog->fecha = $request->fecha;
        $blog->texto = $request->texto;

        if (auth()->check()) {
            $blog->id_creador = auth()->user()->id;
        }

        if ($request->hasFile('imagen1')) {
            $filename = time().'.'.$request->imagen1->getClientOriginalName();
            $request->imagen1->move(public_path('images/notas'), $filename);
            $blog->imagen1 = $filename;
        }

        $blog->save();
        return redirect()->route('blog.main');
    }

    public function destroy($id) {
        $eliminar = notas::find($id);
        $eliminar->delete();
        return redirect()->route('blog.main');
    }
}
