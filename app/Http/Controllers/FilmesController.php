<?php

namespace App\Http\Controllers;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filme::all();
        return view('filmes/index', [
            'filmes' => $dados,
        ]);
    }
    
    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        # dd($form);

        $dados = $form->validate([      
            'título' => 'required',   
            'diretor' => 'required',
            'ano_de_lançamento' => "required",
            'duração' => "required"                            
        ]);
        // Criando um registro dentro da model animal
        Filme::create($dados);
        
        return redirect()->route('filmes');
    }

    public function editar(Filme $filme) {
        return view('filmes/editar', ['filme' => $filme]);
    }

    public function editarGravar(Request $form, Filme $filme) {
        $dados = $form->validate([
        'título' => 'required|max:255',
        'diretor' => 'required',
        'ano_de_lançamento' => 'required',
        'duração' => 'required'
    ]);

    $filme->fill($dados);
    $filme->save();
    return redirect()->route('filmes');
    } 

    public function apagar(Filme $filme) {
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    public function deletar(Filme $filme) {
        $filme->delete();
        return redirect()->route('filmes');
    }
}