@extends('layout')


@section('title','Portafolio')


@section('content')
    <h1>Crear un nuevo Proyecto</h1>

    {{-- Verificamos si hay un algun tipo de error, forma mas sencilla para verificar errores --}}

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)

                <li>{{$error}}</li>
                
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{route('projects.store')}}">
        @csrf

    <label for="">
        Titulo del proyecto <br>
        <input type="text" name="title">
    </label> <br>
    <label for="">
        URL del proyecto <br>
        <input type="text" name="url">
    </label> <br>
    <label for="">
        Descripcion del proyecto <br>
        <textarea name="description"></textarea>
    </label>
    <br>
    <button type="submit">Guardar</button>
   </form>


@endsection