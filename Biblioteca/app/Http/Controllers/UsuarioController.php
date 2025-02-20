<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('login.index');
    }

    public function login(Request $request){
        $credenciales = $request->only('user', 'password');
        if (Auth::attempt($credenciales)){
            // Autenticación exitosa
            return redirect()->intended(route('biblioteca.index'));
        } else {
            $error = 'Usuario incorrecto';
            return view('login.index', compact('error'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('biblioteca.index');
    }


}
