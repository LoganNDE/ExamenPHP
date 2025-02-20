<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Socio;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LibroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('biblioteca.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblioteca.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('biblioteca.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $libro = Libro::findOrFail($id);
        return view('biblioteca.show', compact('libro'));
    }

    public function mostrarHistorialPrestamos($id){
        $libros = Libro::find($id);
        $socios = $libros->socios;
        return view('biblioteca.historialprestamos', compact('socios'));
    }

    public function mostrarPrestamos($id){
        $libros = Socio::findOrFail($id)->libros;
        return view('biblioteca.prestamos', compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
