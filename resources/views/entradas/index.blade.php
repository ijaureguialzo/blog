{{-- resources/views/entradas/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Entradas</h1>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th>Fecha</th>
        </tr>
        @foreach($entradas as $entrada)
            <tr>
                <td>{{ $entrada->titulo }}</td>
                <td>{{ $entrada->texto }}</td>
                <td>{{ $entrada->fecha }}</td>
            </tr>
        @endforeach
    </table>

@endsection

