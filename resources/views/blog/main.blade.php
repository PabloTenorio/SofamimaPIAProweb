@extends('adminlte::page')

@section('title', 'Admin | Catálogo')

@section('content_header')
    <h1>Catálogo</h1>
@stop

@section('content')
    <hr>
        <a href="{{route('blog.create')}}"><button type="button" class="btn btn-primary">Agregar una nueva categoría</button></a>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <th>id</th>
                        <th>Creador</th>
                        <th>Titulo</th>
                        <th>Fecha</th>
                        <th>Texto</th>
                        <th>Imagen</th>
                    </thead>
                    @foreach ($notas as $notas)
                        <tbody>
                            <td>{{$notas->id}}</td>
                            <td>{{$notas->creador}}</td>
                            <td>{{$notas->titulo}}</td>
                            <td>{{$notas->fecha}}</td>
                            <td>{{$notas->texto}}</td>
                            <td>
                                <img src="{{asset('images/notas/' . $notas->imagen1)}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('blog.edit', $notas->id)}}" class="btn btn-primary">Editar</a>
                                <form action="{{route('blog.destroy', $notas->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </td>
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