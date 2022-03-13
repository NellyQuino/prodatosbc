<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
  public function index(Request $request)
  {
      $text = trim($request->get('text'));
      //$users = User::where('rol_id', '2')->get();

     $users= User::where('number_user','LIKE','%'.$text.'%')
                  ->orWhere('username', 'LIKE', '%'.$text.'%')
                  ->where('rol_id', '2')
                  ->orderBy('number_user','asc')
                  ->paginate(8);

      return view('administrador.reportes.reportes', compact('users','text'));
  }
}
