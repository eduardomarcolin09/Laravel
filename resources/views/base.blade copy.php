{{-- resources/views/base.blade.php --}}

<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
    
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{ route('index')}}">Inicial</a> |
        <a href="{{ route('animais')}}">Animais</a> |
        <a href="{{ route('filmes')}}">Filmes</a> |
        {{-- @if (Auth::user() && Auth::user()['admin']) --}}
        @if (Auth::user())
            @if(Auth::user()['admin'])
                <a href="{{ route('usuarios')}}">Usuarios</a> |
            @endif 
        @endif
        @if (Auth::user())
        Olá, <strong>{{ Auth::user()['name'] }}</strong>.
        <a href="{{ route('logout')}}">Logout</a>
        @else
        <a href="{{ route('login')}}">Login</a>
        @endif
        <hr>
        @yield('conteudo')
    </body>
</html>