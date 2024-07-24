<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'name',
        'email',
        'username',
        'password', // lembrar de tirar depois
        'admin'
    ];

    function getAuthIdentifierName() {
        // return do identificador único do usuário, pode ser o email por exemplo..
        return 'id';
    }

    function getAuthIdentifier() {
        return $this->id;
    }
    function getAuthPassword() {
        return $this->password;
    }
    function getRememberToken() {

    }
    function setRememberToken($value) {

    }
    function getRememberTokenName() {

    }
}
