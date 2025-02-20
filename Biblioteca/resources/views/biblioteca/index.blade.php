@extends('partials.layout')
@section('titulo', 'BibliotecaLogan')

@section('contenido')

    <div class="app container d-flex flex-column justify-content-center align-items-start">
        <h1>Listado libros</h1>
        <div class="gridMain">
            @forelse ($libros as $libro)
                <div class="grid">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $libro["titulo"] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Autor: {{ $libro["autor"] }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Editorial: {{ $libro["editorial"] }}</h6>
                            <a class="btn btn-success" href="{{ route('biblioteca.show', $libro->id) }}"><i class="bi bi-eye"></i></a>
                            @if (auth()->check())
                                <a href=" {{ route('biblioteca.hisotorialprestamos', $libro->id) }} " class="btn btn-warning"><i class="bi bi-clipboard2-data"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
            <div class="alert alert-danger" role="alert">
                No se encontraron libros
            </div>
            @endforelse
        </div>

    </div>
    
@endsection