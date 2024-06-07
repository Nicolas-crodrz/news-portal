@extends('adminlte::page')

@section('content')
    <div class="container">
        @if (session('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            {{ session('flash_notification.message') }}
        </div>
    @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Crear Usuario</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Nombre..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" id="email" placeholder="Correo electrónico..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña..." class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Rol</label>
                        <select name="role" id="role" class="form-control">
                            <option value="standard">Standard</option>
                            <option value="admin">Administrator</option>
                        </select>
                    </div>
                    
                    
                    <!-- Botón de Guardar -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
