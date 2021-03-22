{{-- resources/views/entradas/edit.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Editar entrada</h1>

    <form action="{{ route('entradas.update', $entrada->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Título: </label>
            <input type="text" name="titulo" value="{{ $entrada->titulo }}"/>
            <span>{{ $errors->first('titulo') }}</span>
        </div>
        <div>
            <label>Texto: </label>
            <textarea name="texto">{{ $entrada->texto }}</textarea>
        </div>
        <div>
            <label>Fecha: </label>
            <input type="datetime-local" name="fecha" value="{{ $entrada->fecha ?: now() }}"/>
        </div>
        <div>
            <label>Visible: </label>
            <input type="checkbox" name="visible" {{ $entrada->visible ? 'checked' : '' }} />
        </div>
        <input type="submit" name="guardar" value="Guardar"/>
    </form>

    <p>
        <a href="{{ route('entradas.index') }}">Cancelar</a>
    </p>

@endsection
