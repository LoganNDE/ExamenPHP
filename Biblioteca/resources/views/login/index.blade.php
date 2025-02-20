@extends('partials.layout')
@section('titulo', 'Login | BilbliotecaLogan')

@section('contenido')

    <div class="h-80 container flex-column d-flex justify-content-center align-items-center">

        @if (!empty($error))
            <div class="alert alert-danger w-25" role="alert">
                {{ $error }}
            </div>
        @endif

        <form class="w-25" action=" {{ route('login.auth') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user" aria-describedby="usuario" placeholder="admin">
            </div>
            <div class="mt-3"></div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="********">
            </div>
            <div class="mt-3"></div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>

    </div>
    
@endsection