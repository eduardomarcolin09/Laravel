<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');


// Animais
Route::get('/animais', 
// Quando eu acessar a rota, vai pegar a classe AnimaisController e vai executar a função Index
[AnimaisController::class, 'index'])->name('animais');

// Podemos ter varias rotas com o mesmo nome/endereço porém com METÓDOS DIFERENTES 
Route::get('animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');
Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar'])->name('animais.gravar');

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');
Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);

// Animais ta sendo passado por parametro para saber qual vai ser apagado
Route::get('/animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');
Route::delete('/animais/apagar/{animal}', [AnimaisController::class, 'deletar']);

// Usuarios

Route::get('login', [UsuariosController::class, 'login'])->name('login');
Route::post('login', [UsuariosController::class, 'login']);
Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');

// Usando o prefix


// Route::prefix('usuarios')->group(function(){
Route::prefix('usuarios')->middleware('auth')->group(function(){

    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');
    Route::post('cadastrar', [UsuariosController::class, 'gravar'])->name('usuarios.gravar');

    Route::get('editar/{usuario}', [UsuariosController::class, 'editar'])->name('usuarios.editar');
    Route::put('editar/{usuario}', [UsuariosController::class, 'editarGravar']);

    Route::get('apagar/{usuario}', [UsuariosController::class, 'apagar'])->name('usuarios.apagar');
    Route::delete('apagar/{usuario}', [UsuariosController::class, 'deletar']);

});

// Filmes

Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');

Route::get('/filmes/cadastrar', [FilmesController::class, 'cadastrar'])->name('filmes.cadastrar');

Route::post('/filmes/cadastrar', [FilmesController::class, 'gravar'])->name('filmes.gravar');

Route::get('/filmes/editar/{filme}', [FilmesController::class, 'editar'])->name('filmes.editar');
Route::put('/filmes/editar/{filme}', [FilmesController::class, 'editarGravar']);

Route::get('/filmes/apagar/{filme}', [FilmesController::class, 'apagar'])->name('filmes.apagar');
Route::delete('/filmes/apagar/{filme}', [FilmesController::class, 'deletar']);