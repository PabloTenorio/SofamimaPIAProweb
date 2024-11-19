@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="{{route('catalogo.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <label for="">color</label>
        <input type="text" name="color">
        <label for="">categoría</label>
        <select name="categoria" id="">
            @foreach ($categorias as $categoria)
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        <label for="">material</label>
        <input type="text" name="material">
        <label for="">descripcion</label>
        <input type="text" name="descripción">
        <label for="">Imagen</label>
        <input type="file" name="imagen[]" multiple>
        <div id="contenedorinput"></div>
        <input type="submit" value="Enviar">
    </form>
    <button id="nuevaimg">Agregar mas imagenes</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var nuevaimg = document.getElementById('nuevaimg');

            nuevaimg.addEventListener("click", function(){
                var contenedor = document.getElementById('contenedorinput');
                var input = document.createElement('input');

                input.type = 'file';
                input.name = 'imagen';

                contenedor.appendChild(input);
            });
        });
    </script>
@stop