@extends('layout')


@section('title','Portafolio')


@section('content')
    <div class="container">
        <h1>Crear un nuevo Proyecto</h1>

         @include('partials.session-status')
  
        <form method="POST" action="{{route('projects.store')}}">
        
            @include('projects._form',['btnText' => 'Guardar'])
    
        </form>
    </div>
    


@endsection