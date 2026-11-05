@extends('layouts.app')

@section('title', 'Inicio | Resort')

@section('content')
    <h1>Bienvenido al Resort</h1>
    <p>Disfruta de nuestras instalaciones.</p>

    @guest
        <p>
            <a href="{{ route('login') }}">Inicia sesión</a>
            o
            <a href="{{ route('register') }}">crea una cuenta</a>.
        </p>
    @else
        <p>Hola, {{ auth()->user()->name }}.</p>
        <a href="{{ route('panel') }}">Ir a mi panel</a>
    @endguest
@endsection