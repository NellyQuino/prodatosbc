<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasesController extends Controller
{
    public function index()
    {
        return view('administrador.fases.index');
    }
}
