<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'animais';

    // vou colocar todos os campos que eu quero
    protected $fillable = [
        'id',
        'nome',
        'idade',
    ];
}
