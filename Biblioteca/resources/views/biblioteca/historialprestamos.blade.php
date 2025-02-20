@extends('partials.layout')
@section('titulo', 'Historial prestamos | BibliotecaLogan')

@section('contenido')

    <div class="app container d-flex flex-column justify-content-center align-items-start">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha de devolución</th>
                <th scope="col">Historial Prestamos</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($socios as $socio)
                <tr>
                    <td>{{ $socio->nombre }}</td>
                    <td>{{ $socio->email }}</td>
                    <td>FECHA</td>
                    <td><a href="{{ route('biblioteca.prestamos', $socio->id) }}">Ver prestamos</a></td>
                </tr>
            @empty
            </tbody>
                <tr>
                    <td>No se encontraron libros</td>
                </tr>
            </div>
            @endforelse
            </tbody>
        </table>
        <a class="btn btn-warning" href="{{ route('biblioteca.index') }}">Volver al inicio</a>
    </div>
    
@endsection