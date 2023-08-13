<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){

        // El usuario esta logeado? true/false
        if(Auth::check()){
            // dd($usuario);
            return redirect()->route('home');
        }else{
            return view('auth.register');
        }

    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users|min:4',
            'lastName' => 'required',
            'email' => 'required | email| unique:users',
            'password' => 'required | min:5',
        ]);

        // Auntenticar usuario
        auth()->attempt($request->only('email', 'password'));

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->lastName = $request->lastName;
        // slug formatea los espacios del texto y los une con guiones
        $usuario->username = Str::slug($request->username);
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password) ;

        $usuario->save();

        return redirect()->route('register')->with('success', 'Usuario registrado');
    }
}
