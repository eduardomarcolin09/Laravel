{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')

<p class="text-xl pb-6 flex items-center">
    <i class="fas fa-list mr-3"></i> Preencha o Formulário
</p>

@if($errors->any())

<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach
</div>

@endif

<form method="post" action="{{ route('animais.gravar') }}" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <label class="block text-sm text-gray-600" for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    <label class="block text-sm text-gray-600" for="idade">Idade</label>
    <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
    <br>
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded mt-6" type="submit" value="Gravar">Gravar</button>
</form>

@endsection
