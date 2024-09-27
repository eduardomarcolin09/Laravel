@extends('base')

@section('titulo', 'Animais para adoção - ' . $animal->nome)

@section('conteudo')

<p><b>Nome:</b> {{ $animal->nome}} </p>
<p><b>Idade:</b> {{ $animal->idade}} </p>

<p>Para saber mais, visite nosso site</p>

@endsection