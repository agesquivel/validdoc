@extends('layouts.default')

@section('content')
    <h1>Lista de eventos realizados</h1>

    @foreach ($eventos as $evt)
        <p>Nombre {{ $evt->nombre }}</p>
        <p>Descripción {{ $evt->descripcion }}</p>
    @endforeach
@endsection
