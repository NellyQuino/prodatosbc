<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblematicasController extends Controller
{
    public function index()
    {
        return view('administrador.problematicas.problematicas');
    }
}
