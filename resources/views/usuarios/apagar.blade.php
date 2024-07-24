
@extends('base')

@section('titulo', 'Apagar | Usuarios')

@section('conteudo')

<p>Tem certeza que quer apagar?</p>

<p><em>{{ $usuario['name'] }}</em></p>

<form action="{{ route('usuarios.apagar', $usuario['id']) }}" method="post">
@csrf   
@method('delete')

<input type="submit" value="Pode apagar sem medo mano" style="background-color:red ; color:white">
</form>

<a href="{{ route('usuarios') }}">Cancelar</a>

@endsection