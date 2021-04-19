{{-- resources/views/comentarios/create.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Nuevo comentario</h1>

    <div class="container mx-auto my-8">

        <form action="{{ route('comentarios.store') }}" method="POST">
            @csrf
            <div class="container grid grid-cols-2 w-1/2 gap-4">
                <label class="text-xl font-bold">Entrada</label>
                <select name="entrada_id">
                    @foreach($entradas as $entrada)
                        <option value="{{ $entrada->id }}">{{ $entrada->titulo }}</option>
                    @endforeach
                </select>
                <label class="text-xl font-bold">Email</label>
                <div>
                    <input class="rounded w-full" type="text" name="email"/>
                    <span class="font-bold text-sm text-red-500">{{ $errors->first('email') }}</span>
                </div>
                <label class="text-xl font-bold">Texto</label>
                <textarea class="rounded h-72" name="texto"></textarea>
                <label class="text-xl font-bold">Fecha</label>
                <input type="datetime-local" name="fecha" value="{{ now() }}"/>
                <label class="text-xl font-bold">Visible</label>
                <input type="checkbox" name="visible"/>
            </div>
            <div class="pt-8">
                <input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
                <a class="text-gray-500 ml-4" href="{{ route('comentarios.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
