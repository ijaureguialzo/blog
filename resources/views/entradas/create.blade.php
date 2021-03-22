{{-- resources/views/entradas/create.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Nueva entrada</h1>

    <form action="{{ route('entradas.store') }}" method="POST">
        @csrf
        <div>
            <label>Título: </label>
            <input type="text" name="titulo"/>
            <span>{{ $errors->first('titulo') }}</span>
        </div>
        <div>
            <label>Texto: </label>
            <textarea name="texto"></textarea>
        </div>
        <div>
            <label>Fecha: </label>
            <input type="datetime-local" name="fecha" value="{{ now() }}"/>
        </div>
        <div>
            <label>Visible: </label>
            <input type="checkbox" name="visible" checked/>
        </div>
        <input type="submit" name="guardar" value="Guardar"/>
    </form>

    <p>
        <a href="{{ route('entradas.index') }}">Cancelar</a>
    </p>

@endsection
