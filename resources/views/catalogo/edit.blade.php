@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="{{route('catalogo.update', $catalogo->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$catalogo->name}}">
        <label for="">Color</label>
        <input type="text" name="color" value="{{$catalogo->color}}">
        <label for="">Categoría</label>
        <select name="categoria" id="">
            <option value="" selected disabled>Selecciona una opción</option>
            @foreach ($categoria as $categoria)
                <option selected value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        <label for="">Material</label>
        <input type="text" name="material" value="{{$catalogo->material}}">
        <label for="">Descripción</label>
        <input type="text" name="descripción" value="{{$catalogo->descripción}}">
        <label for="">Imagen</label>
        @foreach ($images as $images)
            <img src="{{asset('images/admin/' . $images->imagen)}}" alt="">
            <input type="hidden" name="imagen[]" multiple value="{{$images->imagen}}">
        @endforeach
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
                input.name = 'imagen[]';

                contenedor.appendChild(input);
            });
        });
    </script>
@stop
