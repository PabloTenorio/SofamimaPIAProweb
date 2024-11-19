@extends('adminlte::page')

@section('title', 'Admin | Catálogo')

@section('content_header')
    <h1>Catálogo</h1>
@stop

@section('content')
    <hr>
        <a href="{{route('catalogo.create')}}"><button type="button" class="btn btn-primary">Publicar un nuevo producto</button></a>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <th>id</th>
                        <th>Creador</th>
                        <th>Nombre</th>
                        <th>Color</th>
                        <th>Categoría</th>
                        <th>Material</th>
                        <th>Descripción</th>
                        <th>Imagenes</th>
                    </thead>
                    @foreach ($catalogo as $catalogo)
                        <tbody>
                            <td>{{$catalogo->id}}</td>
                            <td>{{$catalogo->creador}}</td>
                            <td>{{$catalogo->name}}</td>
                            <td>{{$catalogo->color}}</td>
                            <td>{{$catalogo->categoria}}</td>
                            <td>{{$catalogo->material}}</td>
                            <td>{{$catalogo->descripción}}</td>
                            <td>
                                @if (isset($images[$catalogo->id]))
                                    @foreach ($images[$catalogo->id] as $imagen)
                                        <img src="{{ asset('images/admin/' . $imagen) }}"><br>
                                    @endforeach
                                @else
                                    No Images
                                @endif
                            </td>
                            <td>
                                <a href="{{route('catalogo.edit', $catalogo->id)}}" class="btn btn-primary">Editar</a>
                                <form action="{{route('catalogo.destroy', $catalogo->id)}}" method="POST">
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