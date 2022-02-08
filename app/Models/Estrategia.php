<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'eje_id',
        'state',

    ];
    public function eje(){
        return $this->belongsTo(Eje::class, "eje_id");

    }
    public function accione(){
        return $this->hasMany(Accion::class);
    }
}
