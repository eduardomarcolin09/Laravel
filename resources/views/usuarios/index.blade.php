@extends('base')

@section('titulo', 'Usuarios')

@section('conteudo')

<p>
    <a href="{{ route('usuarios.cadastrar') }}" class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar Usuario</a>
</p>

<p> Nossos Usuarios</p>

<table border=1 class="min-w-full bg-white">
    <tr class="bg-gray-800 text-white">
        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Usuário</th>
        {{-- <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Senha</th> --}}
        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Admin</th>
        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Ações</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr @if ($loop->even) class="bg-gray-200" @endif>
        <td class="w-1/5 text-left py-3 px-4">{{ $usuario['name'] }}</td>
        <td class="w-1/5 text-left py-3 px-4">{{ $usuario['email'] }}</td>
        <td class="w-1/5 text-left py-3 px-4">{{ $usuario['username'] }}</td>
        {{-- <td class="w-1/3 text-left py-3 px-4">{{ $usuario['password'] }}</td> --}}
        <td class="w-1/5 text-left py-3 px-4">@if($usuario['admin'] == 0) Não @else Sim @endif</td>
        <td class="w-1/5 text-left py-3 px-4">
            <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="{{ route('usuarios.apagar', $usuario['id'])}}"><i class="fas fa-solid fa-trash"></i> Apagar</a> |
            <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{ route('usuarios.editar', $usuario['id'])}}"><i class="fas fa-pencil-alt"></i> Editar</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection