@extends('layouts.app')

@section('title', 'Iniciar sesión | Resort')

@section('content')
    <h1>Iniciar sesión</h1>

    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div>
            <label for="email">Correo electrónico</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" required>
        </div>

        <button type="submit">Entrar</button>
    </form>
@endsection