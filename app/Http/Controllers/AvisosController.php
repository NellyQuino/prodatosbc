<?php

namespace App\Http\Controllers;
use App\Models\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvisosController extends Controller
{
    public function index()
    {
        return view('administrador.avisos.index');
    }

    public function crear_aviso(Request $request)
    {   
        $user = Auth::user()->id;
        $request->validate([
            'titulo' => ['required', 'string', 'max:50' ],
            'descripcion' => ['required', 'string'],
            'importancia' => ['required', 'string'],
        ],[
            'titulo.required'=> 'El campo titulo es obligatorio.',
            'descripcion.required'=> 'El campo descripcion es obligatorio.',
            'importancia.required'=> 'El campo importancia es obligatorio.',
        ]);

        Aviso::create([
            'user_id' => $user,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'importancia' => $request->importancia,
        ]);
        return back()->with('status', 'Creado con éxito');
    }
}
