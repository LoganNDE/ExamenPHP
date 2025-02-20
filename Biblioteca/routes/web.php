<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('biblioteca/socios', [SocioController::class, 'index'])->name('socios.index');
Route::get('biblioteca/prestamos/{id}', [LibroController::class, 'mostrarPrestamos'])->name('biblioteca.prestamos');
Route::get('biblioteca/hisotrial-prestamos/{id}', [LibroController::class, 'mostrarHistorialPrestamos'])->name('biblioteca.hisotorialprestamos');
Route::resource('biblioteca', LibroController::class)->except('index');
Route::get('/', [LibroController::class, 'index'])->name('biblioteca.index');
Route::get('login', UsuarioController::class)->name('login');
Route::post('login', [UsuarioController::class, 'login'])->name('login.auth');
Route::get('logout', [UsuarioController::class, 'logout'])->name('login.logout');



