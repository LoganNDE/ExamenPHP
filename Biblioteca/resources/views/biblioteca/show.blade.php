@extends('partials.layout')
@section('titulo', 'BibliotecaLogan')

@section('contenido')
    <div class="app container d-flex flex-column justify-content-center align-items-center">
        <div class="card" style="width: 64rem;">
            <div class="card-body">
                <img class="card-img-top" src="{{ $libro['caratula'] }}" alt="{{ $libro['titulo'] }}">
                <h5 class="card-title">{{ $libro["titulo"] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Autor: {{ $libro["autor"] }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Editorial: {{ $libro["editorial"] }}</h6>
            </div>
        </div>
        <div class="p-3">
            <a class="btn btn-warning" href="{{ route('biblioteca.index') }}">Volver al inicio</a>
        </div>
    </div>
    
@endsection