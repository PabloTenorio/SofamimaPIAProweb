@extends('adminlte::page')

@section('title', 'Admin | Catálogo')

@section('content_header')
    <h1>Catálogo</h1>
@stop

@section('content')
    <hr>
        <a href="{{route('categoria.create')}}"><button type="button" class="btn btn-primary">Agregar una nueva categoría</button></a>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <th>id</th>
                        <th>Categoría</th>
                    </thead>
                    @foreach ($categoria as $categoria)
                        <tbody>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->categoria}}</td>
                            <td>
                                <a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-primary">Editar</a>
                                <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST">
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