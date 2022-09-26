<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
/**  Este if con la funcion Auth detecta si al entrar a la pagina de /register ya estamos autentificados
 *   si lo estamos, automaticamente nos va a redirifir a /home, de lo contrario nos dejará ahí
 *   el return, regresa la vista creada en la seccion de views
 */
    public function show(){             
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }
/** Esta funcion es el registro del usuario con 'User' se crea y hace la redirección al login */
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with( 'Cuenta creada correctamente');
    }
        
}
