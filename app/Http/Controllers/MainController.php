<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use App\Models\notas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog(){
        $blog = notas::all();
        $data = [
            'blog'=>$blog
        ];
        return view('blog', $data);
    }

    public function sobrenosotros(){
        return view('sobrenosotros');
    }

    public function catalogo() {
        $catalogo = DB::table('images as img')->select(
            'img.imagen as imagen',
            'cat.id as productoid',
            'cat.name as name',
        )
        ->leftJoin('catalogos as cat', 'cat.id', '=', 'img.productoid')
        ->whereIn('img.id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('images')
                ->groupBy('productoid');
        })
        ->get();

        return view('catalogo', [
            'catalogo'=>$catalogo
        ]);
    }

    public function admin() {
        return view('admin');
    }

    public function users() {
        $usuarios = DB::table('users as us')->select(
            'us.id as id',
            'us.name as name',
            'us.email as email',
            'rol.id as rol',
            'rol.rol as roles',
        )
        ->leftjoin('roles as rol', 'rol.id', '=', 'us.rol')
        ->get();

        return view('users', [
            'usuarios'=>$usuarios
        ]);
    }
}
