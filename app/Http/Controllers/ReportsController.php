<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Logo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      if($request->File('image'))
      {
          Storage::disk('logos');
          $file = $request->file('image');
          $filename = time().'-'.$request->file('image')->getClientOriginalName();
          $uploadSuccess = $request->file('image')->storeAs('', $filename, 'logos');

          $request->validate([
              'image' => 'required',
              'description' => 'required|string|max:255|',
          ]);

          Logo::create([
              'user_id' => '1',
              'image' => $filename,
              'description' => $request->description,
          ]);
      }
      return redirect()->back();
  }

}
