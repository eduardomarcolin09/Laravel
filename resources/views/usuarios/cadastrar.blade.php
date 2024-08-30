@extends('base')

@section('titulo', 'Cadastrar | Usuários')

@section('conteudo')

<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>

<p class="text-xl pb-6 flex items-center">
    <i class="fas fa-list mr-3"></i> Preencha o Formulário
</p>

<form method="post" action="{{ route('usuarios.gravar') }}" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <p>
        <label class="block text-sm text-gray-600" for="nome">Nome</label>
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    </p>
    <p>
        <label class="block text-sm text-gray-600" for="email">Email</label>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    </p>
    <p>
        <label class="block text-sm text-gray-600" for="username">Usuário</label>
        <input type="text" name="username" placeholder="Usuário" value="{{ old('username') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    </p>
    <p>
        <label class="block text-sm text-gray-600" for="password">Senha</label>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    </p>
    <p>
        <select name="admin">
            <option value="null">Selecione Admin</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </p>
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded mt-6" type="submit" value="Gravar">Gravar</button>
</form>

@endsection