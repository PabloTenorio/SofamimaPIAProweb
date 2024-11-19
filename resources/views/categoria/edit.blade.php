@extends('adminlte::page')

@section('title', 'Admin | Categoría')

@section('content_header')
    <h1>Admin | Categoría</h1>
@stop

@section('content')
    <form action="{{route('categoria.update', $categoria->id)}}" method="POST">
        @csrf
        <label>Categoría</label>
        <input class="form-control" type="text" name="categoria" value="{{$categoria->categoria}}">
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
