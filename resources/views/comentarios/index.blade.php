{{-- resources/views/comentarios/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Comentarios</h1>

    <div class="container mx-auto">

        <table class="container table-fixed tabla-hover border my-8">
            <thead>
            <tr>
                <th>Email</th>
                <th>Fecha</th>
                <th class="text-center">Visible</th>
                <th colspan="2" class="w-1/6">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>
                        <a href="{{ route('comentarios.show', $comentario->id) }}">{{ $comentario->email }}</a>
                    </td>
                    <td>{{ $comentario->fecha }}</td>
                    <td class="text-center">{{ $comentario->visible ? 'Sí' : 'No' }}</td>
                    <td>
                        <a class="btn-secondary" href="{{ route('comentarios.edit', $comentario->id) }}">Editar</a>
                    </td>
                    <td class="text-left">
                        <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST"
                              onsubmit="return confirm('¿Estás seguro?');">
                            @csrf
                            @method('DELETE')
                            <input class="btn-danger" type="submit" name="borrar" value="Borrar"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pt-4">
            <a class="btn-primary" href="{{ route('comentarios.create') }}">Nuevo comentario</a>
        </div>
    </div>
@endsection
