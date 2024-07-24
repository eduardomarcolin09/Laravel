{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Filmes')

@section('conteudo')

<p> Preencha o formulário </p>

@if($errors->any())

<div>
    <h4>Preencha todos os campos (:</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>

@endif

<form method="post" action="{{ route('filmes.cadastrar') }}">
    @csrf
    <input type="text" name="título" placeholder="Título" value="{{ old('título') }}">
    <br> <br>
    <input type="text" name="diretor" placeholder="Diretor" value="{{ old('diretor') }}">
    <br> <br>
    <input type="text" name="ano_de_lançamento" placeholder="Ano de Lançamento" value="{{ old('ano_de_lançamento') }}">
    <br> <br>
    <input type="text" name="duração" placeholder="Duração" value="{{ old('duração') }}">
    <br> <br>
    <input type="submit" value="Gravar">
</form>

@endsection
