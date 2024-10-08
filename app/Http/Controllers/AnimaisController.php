<?php

namespace App\Http\Controllers;

use App\Mail\AnimalCadastrar;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnimaisController extends Controller
{
    public function index() {
        // pegando todos dados
        $dados = Animal::all();
        // pegando só os que foram apagados
        // $dados = Animal::onlyTrashed()->get();
        // todos com apagados
        // $dados = Animal::withTrashed()->get();
        // ter certeza que veio tudo..       dd($dados);
        return view('animais/index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');   
    }

    public function gravar(Request $form) {
        # dd($form);

        // Antes de registrar tem que validar os dados

        $dados = $form->validate([       // required = obrigatório - integer = inteiro - min:3 = minimo 3 caracteres 
            'nome' => 'required|min:3',   
            'idade' => 'required|integer'                            
        ]);
        // Criando um registro dentro da model animal
        $animal = Animal::create($dados);
        Mail::to('alguem@batata.com')->send(new AnimalCadastrar($animal));
        return redirect()->route('animais');
    }

    public function editar(Animal $animal) {
        return view('animais/editar', ['animal' => $animal]);
    }

    public function editarGravar(Request $form, Animal $animal) {
        $dados = $form->validate([
            'nome' => 'required',
            'idade' => 'required'
        ]);

        $animal->fill($dados);
        $animal->save();
        return redirect()->route('animais');
    }

    // Animal $animal ta dizendo que o tipo é "animal" dai assim tras os dados do animal, se deixar só o $animal trás somente o id
    public function apagar(Animal $animal) {
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }

    // apagar mostra msg, deletar realmente dela
    public function deletar(Animal $animal) {
        $animal->delete();
        return redirect()->route('animais');
    }

    public function ver(Animal $animal) {
        return view('animais.ver', [
            'animal' => $animal,
        ]);
    }
}
