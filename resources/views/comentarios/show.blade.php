{{-- resources/views/comentarios/show.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>{{ $comentario->email }}</h1>

    <div class="container mx-auto">

        <table class="tabla-alterna border my-8">
            <tbody>
            <tr>
                <th>Entrada</th>
                <td>{{ $comentario->entrada->titulo }}</td>
            </tr>
            <tr>
                <th>Texto</th>
                <td>{{ $comentario->texto }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ $comentario->fecha }}</td>
            </tr>
            <tr>
                <th>Visible</th>
                <td>{{ $comentario->visible ? 'Sí' : 'No' }}</td>
            </tr>
            </tbody>
        </table>

        <div class="pt-4">
            <a class="btn-secondary" href="{{ route('comentarios.index') }}">Volver</a>
        </div>
    </div>
@endsection
