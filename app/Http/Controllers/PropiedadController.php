<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use App\Models\User;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $propiedades = Propiedad::where('user_id',auth()->user()->id)->paginate(10);

        return view('mis-propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public function create()
    {
        return view('propiedades.publicar');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        Propiedad::create([
            'titulo' => $request->titulo,
            'precio' => $request->precio,
            'foto' => $request->imagen,
            'descripcion' => $request->descripcion,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('mis-propiedades');
    }

    public function show(User $user, Propiedad $propiedad)
    {
       return view('propiedades.propiedad', [
        'user' => $user,
        'propiedad' => $propiedad
       ]);
    }
}
