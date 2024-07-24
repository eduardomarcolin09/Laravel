<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';

    // vou colocar todos os campos que eu quero
    protected $fillable = [
        'id',
        'nome',
        'idade',
    ];
}
