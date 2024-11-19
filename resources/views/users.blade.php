@extends('adminlte::page')

@section('title', 'Admin | Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Email</th>
                    </thead>
                    @foreach ($usuarios as $users)
                        <tbody>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->rol}}</td>
                            <td>{{$users->email}}</td>
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
