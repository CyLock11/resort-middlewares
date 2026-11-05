@extends('layouts.app')

@section('title', 'Panel de usuario | Resort')

@section('content')
    <h1>Habitación del cliente</h1>
    <p>Bienvenido, {{ auth()->user()->name }}.</p>

    @if (session('error'))
        <p role="alert">{{ session('error') }}</p>
    @endif

    <ul>
        <li><a href="{{ route('casino') }}">Ir al casino</a></li>

        @if (auth()->user()->is_admin)
            <li><a href="{{ route('admin') }}">Ir a administración</a></li>
        @endif
    </ul>
@endsection