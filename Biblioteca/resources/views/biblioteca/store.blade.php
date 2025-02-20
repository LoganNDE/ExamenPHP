@extends('partials.layout')
@section('titulo', 'Login | BilbliotecaLogan')

@section('contenido')

    <div class="h-80 container flex-column d-flex justify-content-center align-items-center">
        <form class="w-75" action=" {{ route('biblioteca.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" aria-describedby="titulo" placeholder="El principito">
            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" name="autor" aria-describedby="autor" placeholder="Logan Naranjo">
            </div>

            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" class="form-control" name="editorial" aria-describedby="editorial" placeholder="Planeta">
            </div>

            <div class="form-group">
                <label for="caratula">Caratula</label>
                <input type="text" class="form-control" name="caratula" aria-describedby="caratula" placeholder="https://static.nationalgeographic.es/files/styles/image_3200/public/nationalgeographic_1468962.jpg?w=1600&h=1179">
            </div>
            <div class="mt-3"></div>
            <button type="submit" class="btn btn-primary">Agrear</button>
            <a class="btn btn-warning" href="{{ route('biblioteca.index') }}">Cancelar</a>
        </form>
    </div>
@endsection