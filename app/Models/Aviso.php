<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titulo',
        'descripcion',
        'importancia',
    ];
    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
}
