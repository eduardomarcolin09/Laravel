{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Editar | Animais para adoção')

@section('conteudo')

<p> Preencha o formulário </p>

{{-- @if($errors->any())

<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
    <p>{{ $erro }}</p>
    @endforeach 
</div>

@endif --}}

<form method="post" action="{{ route('filmes.editar', $filme->id) }}">
    @csrf
    @method('put') 

    <p>
        <input type="text" name="título" placeholder="Nome do Filme" value="{{ old('título', $filme->título ?? '') }}">
    </p>
    <p>
        <input type="text" name="diretor" placeholder="Diretor" value="{{ old('diretor', $filme->diretor ?? '') }}">
    </p>
        <input type="text" name="ano_de_lançamento" placeholder="Ano de Lançamento" value="{{ old('ano_de_lançamento', $filme->ano_de_lançamento ?? '') }}">
    <p>
        <input type="text" name="duração" placeholder="Duração" value="{{ old('duração', $filme->duração ?? '') }}">
    </p>
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection