@extends('adminlte::page')

@section('title', 'Admin | Categoría')

@section('content_header')
    <h1>Admin | Categoría</h1>
@stop

@section('content')
    <form action="{{route('categoria.update', $categoria->id)}}" method="POST">
        @csrf
        <label>categoría</label>
        <input type="text" name="categoria" value="{{$categoria->categoria}}">
        <input type="submit" value="Enviar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
