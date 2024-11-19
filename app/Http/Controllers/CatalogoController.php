<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use App\Models\categoria;
use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    public function main() {
        $producto = DB::table('catalogos as cat')->select(
           'cat.id as id', 
           'cat.name as name', 
           'cat.color as color', 
           'cat.material as material', 
           'cat.descripción as descripción', 
           'us.id as id_creador', 
           'us.name as creador', 
           'cate.id as categoria', 
        )
        ->leftjoin('users as us', 'us.id', '=', 'cat.id_creador')
        ->leftjoin('categorias as cate', 'cate.id', '=', 'cat.categoria')
        ->get();

        $images = DB::table('images as img')->select(
            'img.productoid as productoid', 
            'img.imagen as imagen', 
        )
        ->get();

        $imagenesIndexadas = $images->groupBy('productoid')->map(function ($items) {
            return $items->pluck('imagen');
        });

        return view('catalogo.main', [
            'catalogo' => $producto,
            'images' => $imagenesIndexadas
        ]);
    }

    public function create() {
        $categoria = categoria::all();
        $data = [
            'categorias'=>$categoria
        ];
        return view('catalogo.create', $data);
    }

    public function store(Request $request) {
        $producto = new catalogo();
        $producto->id = $request->id;
        $producto->name = $request->name;
        $producto->color = $request->color;
        $producto->categoria = $request->categoria;
        $producto->material = $request->material;
        $producto->descripción = $request->descripción;

        if (auth()->check()) {
            $producto->id_creador = auth()->user()->id;
        }
        
        $producto->save();

        if($request->hasFile('imagen')) {
            foreach ($request->file('imagen') as $imagen) {
                $filename = time() . '.' . $imagen->getClientOriginalName();
                $imagen->move(public_path('images/admin'), $filename);
    
                $imagenes = new images();
                $imagenes->productoid = $producto->id;
                $imagenes->imagen = $filename;
                $imagenes->save();
            }
        }

        return redirect()->route('catalogo.main');
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
