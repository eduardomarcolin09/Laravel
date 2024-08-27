@extends('base')

@section('titulo','Login | Usuarios')

@section('conteudo')

<div>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>


<form action="{{ route('login') }}" method="post" class="p-10 bg-white rounded shadow-xl">
    @csrf

    <div class="">
        <label class="block text-sm text-gray-600" for="username">Usuario</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="Usuário" aria-label="username">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Senha</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Senha" aria-label="password">
    </div>

    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Entrar">Entrar</button>
    </div>

</form>

@endsection