<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class FasesController extends Controller
{
    public function index(Request $request)
    {   
       $text = trim($request->get('text'));
       $users= User::where('number_user','LIKE','%'.$text.'%')
                    ->orWhere('username', 'LIKE', '%'.$text.'%')
                    ->where('rol_id', '2')
                    ->orWhere('sector', 'LIKE', '%'.$text.'%')
                    ->orderBy('number_user','asc')
                    ->paginate(8);
        return view('administrador.fases.index', compact('users','text'));
    }
}
