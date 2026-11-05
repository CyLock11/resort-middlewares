@extends('layouts.app')

@section('title', 'Casino | Resort')

@section('content')
    <h1>Casino del Resort</h1>
    <p>Bienvenido a la sala de juegos para adultos.</p>
    <p>Edad de acceso: 18 años o más.</p>

    <a href="{{ route('panel') }}">Volver a mi panel</a>
@endsection