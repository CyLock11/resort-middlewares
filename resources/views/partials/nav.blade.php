<nav>
    <a href="{{ route('home') }}">Inicio</a>
    <a href="{{ route('login') }}">Iniciar sesión</a>
    <a href="{{ route('register') }}">Registrarse</a>

    @auth
        <a href="{{ route('panel') }}">Mi panel</a>
        <a href="{{ route('casino') }}">Casino</a>

        @if (auth()->user()->is_admin)
            <a href="{{ route('admin') }}">Administración</a>
        @endif

        <form method="POST" action="{{ route('logout') }}" style="display: inline">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @endauth
</nav>