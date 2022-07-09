<?php

namespace App\Http\Controllers;
use App\Models\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvisosController extends Controller
{
    public function index()
    {
        $avisos = Aviso::orderBy('id','desc')->paginate(8);
        return view('administrador.avisos.index', ['avisos'=> $avisos]);
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

    public function delete_aviso(Request $request, $aviso_id)
    {
        $aviso = Aviso::find($aviso_id);//Encuentra el dato con el id
        $aviso->delete();
        return back()->with('status_delete', 'Eliminado con éxito');

    }

    public function update(Request $request, Aviso $aviso)
    {
        $request->validate([

            'titulo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'importancia' => ['required', 'string'],
        ],[
            'titulo.required' => 'El campo descripción de la actividad es obligatorio.',
            'descripcion.required' => 'El campo descripción de la actividad es obligatorio.',
            'importancia.required' => 'El campo descripción de la actividad es obligatorio.'
        ]);
        $aviso->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'importancia' => request('importancia'),
 
         ]);
         return  back()->with('status_update', 'Actualizado con éxito');

    }

}
