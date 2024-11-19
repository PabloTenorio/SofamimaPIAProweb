<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }

    public function catalogo() {
        return view('catalogo');
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
