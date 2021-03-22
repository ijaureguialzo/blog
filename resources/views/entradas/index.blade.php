{{-- resources/views/entradas/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Entradas</h1>

    <table border="1">
        <thead>
        <tr>
            <th>Título</th>
            <th>Fecha</th>
            <th>Visible</th>
            <th colspan="2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entradas as $entrada)
            <tr>
                <td><a href="{{ route('entradas.show', $entrada->id) }}">{{ $entrada->titulo }}</a></td>
                <td>{{ $entrada->fecha }}</td>
                <td>{{ $entrada->visible ? 'Sí' : 'No' }}</td>
                <td><a href="{{ route('entradas.edit', $entrada->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('entradas.destroy', $entrada->id) }}" method="POST"
                          onsubmit="return confirm('¿Estás seguro?');">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="borrar" value="Borrar"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <p>
        <a href="{{ route('entradas.create') }}">Nueva entrada</a>
    </p>

@endsection
