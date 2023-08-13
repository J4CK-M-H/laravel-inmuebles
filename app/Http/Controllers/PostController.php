<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('propiedades.publicar');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        dd($request);
    }
}
