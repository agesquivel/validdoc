@extends('layouts.default')

@section('content')
    <h1>Lista de eventos realizados</h1>

    <table class="table table-striped table-bordered table-hover border-primary">
        <thead>
            <tr>
                <th>Id</th>
                <th>Evento</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evt)
                <tr>
                    <td>{{ $evt->id }}</td>
                    <td>{{ $evt->nombre }}</td>
                    <td> {{ $evt->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
