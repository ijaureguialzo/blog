{{-- resources/views/comentarios/edit.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Editar comentario</h1>

    <div class="container mx-auto my-8">

        <form action="{{ route('comentarios.update', $comentario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container grid grid-cols-2 w-1/2 gap-4">
                <label class="text-xl font-bold">Entrada</label>
                <select name="entrada_id">
                    @foreach($entradas as $entrada)
                        <option
                            {{ $entrada->id == $comentario->entrada_id ? 'selected' : '' }}
                            value="{{ $entrada->id }}">{{ $entrada->titulo }}</option>
                    @endforeach
                </select>
                <label class="text-xl font-bold">Email</label>
                <div>
                    <input class="rounded w-full" type="text" name="email" value="{{ $comentario->email }}"/>
                    <span class="font-bold text-sm text-red-500">{{ $errors->first('email') }}</span>
                </div>
                <label class="text-xl font-bold">Texto</label>
                <textarea class="rounded h-72" name="texto">{{ $comentario->texto }}</textarea>
                <label class="text-xl font-bold">Fecha</label>
                <input type="datetime-local" name="fecha" value="{{ $comentario->fecha ?: now() }}"/>
                <label class="text-xl font-bold">Visible</label>
                <input type="checkbox" name="visible" {{ $comentario->visible ? 'checked' : '' }} />
            </div>
            <div class="pt-8">
                <input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
                <a class="text-gray-500 ml-4" href="{{ route('comentarios.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
