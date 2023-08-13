<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function __construct() {
    }

    

    public function index() {

        // El usuario esta logeado? true/false

        if(Auth::check()){
            return redirect()->route('home');
        }else{
            return view('auth.login');
        }

    }

    public function store(Request $request) {

        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            //* back: funcion para mandar al usuario a la ruta desde donde mando los datos, 
            //* en este caso al get de login. Solo si los datos son icorrectos
            return back()->with('incorrect', 'Credenciales incorrectas');
        }

        return redirect()->route('home');
    }
}
