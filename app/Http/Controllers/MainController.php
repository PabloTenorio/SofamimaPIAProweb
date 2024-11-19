<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $usuarios = User::all();
        $data = [
            'usuarios'=>$usuarios
        ];
        return view('users', $data);
    }
}
