<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model
{
    use HasFactory;
    protected $fillable = [
        'action_plan',
        'responsable',
        'position',
        'user_id',
        'accion_id',

    ];
       protected $hidden = [
        'password',
        'remember_token',
    ];
    public function user(){
        return $this->belongsTo(User::class, "user_id");

    }
    public function accion(){
        return $this->belongsTo(Accion::class, "accion_id");

    }
}
