<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eje extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'name',
        'description',
        'state',
    ];
    public function estrategia(){
        return $this->hasMany(Estrategia::class);

    }

}
