<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Funcion que con el flush elimina toda la carga que genera el usuario y te limpia de la autenticacion
     * con la funcion logout cierra tu sesion desde el metodo de Auth
     */
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
