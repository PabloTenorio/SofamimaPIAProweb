@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-white">Usuarios</h3>

                    <p class="text-white">Datos de los usuarios</p>
                </div>
                <div class="icon">
                    <i class="icon fas fa-user"></i>
                </div>
                <a href="{{url('admin/users')}}" class="small-box-footer" style="color:white !important;">Ir <i class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                <div class="inner">
                    <h3 class="text-white">Catalogo</h3>

                    <p class="text-white">Creación de publicaciones para el catálogo</p>
                </div>
                <div class="icon">
                    <i class="icon fas fa-book"></i>
                </div>
                <a href="{{url('catalogo/admin')}}" class="small-box-footer" style="color:white !important;">Ir <i class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-white">Blog</h3>

                    <p class="text-white">Creación de notas para el blog</p>
                </div>
                <div class="icon">
                    <i class="icon fas fa-edit"></i>
                </div>
                <a href="{{url('')}}" class="small-box-footer" style="color:white !important;">Ir <i class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-white">Categorías</h3>

                    <p class="text-white">Creación de categorías</p>
                </div>
                <div class="icon">
                    <i class="icon fas fa-plus"></i>
                </div>
                <a href="{{url('categoría/admin')}}" class="small-box-footer" style="color:white !important;">Ir <i class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
