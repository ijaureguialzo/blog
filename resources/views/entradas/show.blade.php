{{-- resources/views/entradas/show.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>{{ $entrada->titulo }}</h1>

    <table border="1">
        <tbody>
        <tr>
            <th>Texto</th>
            <td>{{ $entrada->texto }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{ $entrada->fecha }}</td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{{ $entrada->visible ? 'Sí' : 'No' }}</td>
        </tr>
        </tbody>
    </table>

    <p>
        <a href="{{ route('entradas.index') }}">Volver</a>
    </p>

@endsection
