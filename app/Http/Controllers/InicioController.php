<?php

namespace App\Http\Controllers;
use App\Models\Aviso;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $avisos = Aviso::orderBy('id','desc')->get();
        return view('sujeto.index', ['avisos'=> $avisos]);
    }
}
