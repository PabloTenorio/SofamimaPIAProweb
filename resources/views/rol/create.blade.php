@extends('adminlte::page')

@section('title', 'Admin | Roles')

@section('content_header')
    <h1>Admin | Roles</h1>
@stop

@section('content')
    <form action="{{route('rol.store')}}" method="POST">
        @csrf
        <label>Rol</label>
        <input type="text" name="rol">
        <input type="submit" value="Enviar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
