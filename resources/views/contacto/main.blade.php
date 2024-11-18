@extends('adminlte::page')

@section('title', 'Admin | Contactos')

@section('content_header')
    <h1>Contactos</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table text-center">
                    <thead>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Presupuesto</th>
                        <th>Mensaje</th>
                    </thead>
                    @foreach ($correo as $correo)
                        <tbody>
                            <td>{{$correo->id}}</td>
                            <td>{{$correo->nombre}}</td>
                            <td>{{$correo->correo}}</td>
                            <td>{{$correo->telefono}}</td>
                            <td>{{$correo->presupuesto}}</td>
                            <td>{{$correo->mensaje}}</td>
                        </tbody>
                    @endforeach
                </table>
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
