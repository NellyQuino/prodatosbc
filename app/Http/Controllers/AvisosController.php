<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisosController extends Controller
{
    public function index()
    {
        return view('administrador.avisos.index');
    }
}
