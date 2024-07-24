{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Editar | Usuários')

@section('conteudo')

<p> Preencha o formulário </p>

@if($errors->any())

<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>

@endif

<form method="post" action="{{ route('usuarios.editar', $usuario->id) }}">
    @csrf
    @method('put') 
    
    <p>
        <input type="text" name="name" placeholder="Nome" value="{{ old('name', $usuario->name ?? '') }}">
    </p>
    <p>
        <input type="email" name="email" placeholder="Email" value="{{ old('email', $usuario->email ?? '') }}">
    </p>
    <p>
        <input type="text" name="username" placeholder="Usuário" value="{{ old('username', $usuario->username ?? '') }}">
    </p>
    <p>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password', $usuario->password ?? '') }}">
    </p>
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