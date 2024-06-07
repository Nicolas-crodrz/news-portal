@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Usuario</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Haz clic en el botón de abajo para crear un nuevo usuario.</p>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Crear Usuario</a>
                </div>
            </div>
        </div>
    </div>
@stop
