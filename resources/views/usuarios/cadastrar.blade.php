@extends('base')

@section('titulo', 'Cadastrar | Usuários')

@section('conteudo')

<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>

<p> Preencha o formulário </p>

<form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <p><input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"></p>
    <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
    <p><input type="text" name="username" placeholder="Usuário" value="{{ old('username') }}"></p>
    <p><input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"></p>
    <p>
        <select name="admin">
            <option value="null">Selecione Admin</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </p>
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection