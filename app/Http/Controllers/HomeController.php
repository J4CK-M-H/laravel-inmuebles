<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        if($request->search) {
            $propiedades = Propiedad::where('titulo', 'LIKE', '%'.$request->search.'%')->get();
            if(count($propiedades) > 0){
                return view('home', [
                    'propiedades' => $propiedades
                ]);
            }else {
                return view('home', [
                    'mensaje' => 'No hay datos que coincida con la busqueda'
                ]);
            }

        }

        // if(!Auth::check()){
        //     return back();
        // }
        $propiedades = Propiedad::all();
        
        return view('home', [
            'propiedades' => $propiedades
        ]);
    }

    public function search(Request $request)
    {
        if($request->search == 0) {

            return redirect()->route('home');
        }

        return to_route('home', ['search' => $request->search]);
    }
    
    public function show()
    {
        
    }
}
