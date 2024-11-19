@extends('adminlte::page')

@section('title', 'Admin | Blog')

@section('content_header')
    <h1>Admin | Blog</h1>
@stop

@section('content')
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Titulo</label>
        <input class="form-control" type="text" name="titulo">
        <label>Fecha</label>
        <input class="form-control" type="date" name="fecha">
        <label>Texto</label>
        <input class="form-control" type="text" name="texto">
        <label>Imagen</label>
        <input class="form-control" type="file" name="imagen1">
        <hr>
        <input class="form-control btn btn-success" type="submit" value="Enviar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop