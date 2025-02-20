@extends('partials.layout')
@section('titulo', 'BibliotecaLogan')

@section('contenido')

    <div class="app container flex-column d-flex justify-content-center align-items-start">
        <h1>Listado Socios</h1>
        <div class="gridMain">
            @forelse ($socios as $socio)
                <div class="grid">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nombre: {{ $socio["nombre"] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Email: {{ $socio["email"] }}</h6>
                            @if (auth()->check())
                            <td><a href="{{ route('biblioteca.prestamos', $socio->id) }}">Ver prestamos</a></td>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
            <div class="alert alert-danger" role="alert">
                No se encontraron socios
            </div>
            @endforelse
        </div>

    </div>
    
@endsection