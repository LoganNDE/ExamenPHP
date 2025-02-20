@extends('partials.layout')
@section('titulo', 'Prestamos | BibliotecaLogan')

@section('contenido')

    <div class="app container d-flex flex-column justify-content-center align-items-start">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Editorial</th>
                <th scope="col">Fecha devolucion</th>
                <th scope="col">Acion</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>FECHA</td>
                    <td>
                        <a href=" {{ route('biblioteca.show', $libro->id) }} ">Ver libro</a>
                        <a href=" {{ route('biblioteca.hisotorialprestamos', $libro->id) }} ">Ver Historial</a>
                    </td>
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