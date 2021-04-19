{{-- resources/views/entradas/show.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>{{ $entrada->titulo }}</h1>

    <div class="container mx-auto">

        <table class="tabla-alterna border my-8">
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

        <h2 class="text-2xl">Comentarios</h2>
        <table class="tabla-alterna border my-8">
            <tbody>
            @foreach($entrada->comentarios as $comentario)
                <tr>
                    <th>Texto</th>
                    <td>{{ $comentario->texto }}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $comentario->fecha }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{ route('comentarios.comentar') }}" method="POST">
            @csrf
            <div class="container grid grid-cols-2 w-1/2 gap-4">
                <input type="hidden" name="entrada_id" value="{{ $entrada->id }}"/>
                <label class="text-xl font-bold">Email</label>
                <div>
                    <input class="rounded w-full" type="text" name="email"/>
                    <span class="font-bold text-sm text-red-500">{{ $errors->first('email') }}</span>
                </div>
                <label class="text-xl font-bold">Texto</label>
                <textarea class="rounded h-72" name="texto"></textarea>
            </div>
            <div class="pt-8">
                <input class="btn-primary" type="submit" name="guardar" value="Comentar"/>
            </div>
        </form>

        <div class="pt-4">
            <a class="btn-secondary" href="{{ route('entradas.index') }}">Volver</a>
        </div>
    </div>
@endsection
