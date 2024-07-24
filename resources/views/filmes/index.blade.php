{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Filmes')

@section('conteudo')

<p>
    <a href="{{ route('filmes.cadastrar') }}">Cadastrar Filme</a>
</p>

<p> Veja nossos filmes</p>

<table border=1>
    <tr>
        <th>Título</th>
        <th>Diretor</th>
        <th>Ano_de_Lançamento</th>
        <th>Duração</th>
        <th>Ações</th>
    </tr>
    @foreach ($filmes as $filme)
    <tr>
        <td>{{ $filme['título'] }}</td>
        <td>{{ $filme['diretor'] }}</td>
        <td>{{ $filme['ano_de_lançamento']}}</td>
        <td>{{ $filme['duração']}}</td>
        <td>
            <a href="{{ route('filmes.apagar', $filme['id'])}}">Apagar</a> |
            <a href="{{ route('filmes.editar', $filme['id']) }}">Editar</a>
        </td>
        {{-- <td> <a href="{{ route('animais.apagar', $animal['id'])}}">Apagar</a></td> --}}
    </tr>
    @endforeach
</table>

@endsection