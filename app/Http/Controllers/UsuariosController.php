<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index() {
        // como concatenar comandos
        // $dados = Usuario::orderBy('name', 'asc')->where('name','fulano')->get();
        $dados = Usuario::orderBy('name', 'asc')->get();
        return view('usuarios/index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('usuarios/cadastrar');
    }

    public function gravar(Request $form) {
        $dados = $form->validate([      
            'name' => 'required',   
            'email' => 'required|unique:usuarios',
            'username' => "required",
            'password' => "required",
            'admin' => 'required'                          
        ]);

        // codificando a senha
        $dados['password'] = Hash::make($dados['password']);
        // Criando um registro dentro da model animal
        Usuario::create($dados);
        
        return redirect()->route('usuarios');
    }

    public function editar(Usuario $usuario) {
        return view('usuarios/editar', ['usuario' => $usuario]);
    }

    public function editarGravar(Request $form, Usuario $usuario) {
        $dados = $form->validate([
            'name' => 'required',   
            'email' => 'required',
            'username' => "required",
            'password' => "required",
            'admin' => "required|in:0,1"   
        ]);
        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuarios');
    } 

    public function apagar(Usuario $usuario) {
        return view('usuarios.apagar', [
            'usuario' => $usuario,
        ]);
    }

    // apagar mostra msg, deletar realmente dela
    public function deletar(Usuario $usuario) {
        $usuario->delete();
        return redirect()->route('usuarios');
    }

    public function login(Request $form) {
        if($form->isMethod('POST')) {
            # dd($form);

            $credenciais = $form->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            // Tentar fazer o login
            if(Auth::attempt($credenciais)) {
                // return redirect()->route('index');
                return redirect()->intended(route('index'));
                // o intended = é intencional, se caso não encontrar a rota que o usuário quer ir ele vai pra login
            }

            else {
                return redirect()->route('login')
                ->with('erro', 'Usuário ou senha inválidos');
                // with mensagem rápida
            }
        }

        return view('usuarios.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }

}
