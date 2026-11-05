@extends('layouts.app')

@section('title', 'Administración | Resort')

@section('content')
    <h1>Oficina de dirección</h1>
    <p>Zona exclusiva para administradores.</p>

    <a href="{{ route('panel') }}">Volver a mi panel</a>
@endsection