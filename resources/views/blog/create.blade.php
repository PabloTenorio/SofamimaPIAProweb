@extends('adminlte::page')

@section('title', 'Admin | Blog')

@section('content_header')
    <h1>Admin | Blog</h1>
@stop

@section('content')
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Titulo</label>
        <input type="text" name="titulo">
        <label>Fecha</label>
        <input type="date" name="fecha">
        <label>Texto</label>
        <input type="text" name="texto">
        <label>Imagen</label>
        <input type="file" name="imagen1">
        <input type="submit" value="Enviar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop