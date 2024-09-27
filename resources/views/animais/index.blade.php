{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')

<p>
    <a href="{{ route('animais.cadastrar') }}" class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar animal</a>
</p>

<p> Veja nossa lista de animais para adoção</p>

<table border=1 class="min-w-full bg-white">
    <tr class="bg-gray-800 text-white">
        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Ações</th>
    </tr>
    @foreach ($animais as $animal)
    <tr @if ($loop->even) class="bg-gray-200" @endif>
        <td class="w-1/3 text-left py-3 px-4"><a href="{{route('animais.ver', $animal['id'])}}">{{ $animal['nome'] }}</a></td>
        <td class="w-1/3 text-left py-3 px-4">{{ $animal['idade'] }}</td>
        <td class="w-1/3 text-left py-3 px-4">
            <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="{{ route('animais.apagar', $animal['id'])}}"><i class="fas fa-solid fa-trash"></i> Apagar</a> |
            <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{ route('animais.editar', $animal['id'])}}"><i class="fas fa-pencil-alt"></i> Editar</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection