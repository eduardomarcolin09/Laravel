{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Editar | Animais')

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

<form method="post" action="{{ route('animais.editar', $animal->id) }}">
    @csrf
    @method('put') 
    
    <p>
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome', $animal->nome ?? '') }}">
    </p>
    <p>
        <input type="number" name="idade" placeholder="Idade" value="{{ old('idade', $animal->idade ?? '') }}">
    </p>
    <br>
    <input type="submit" value="Gravar">

</form>

@endsection