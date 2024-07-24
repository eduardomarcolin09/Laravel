<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $table = 'filmes';
    protected $fillable = [
        'id',
        'título',
        'diretor',
        'ano_de_lançamento',
        'duração'
    ];
}
