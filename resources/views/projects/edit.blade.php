@extends('layout')


@section('title','Portafolio')


@section('content')
    <h1>Crear un nuevo Proyecto</h1>
    
    @include('partials.session-status')
    @include('partials.validation-errors')
    <form method="POST" action="{{route('projects.update',$project)}}">
     @method('PATCH')

        @include('projects._form',['btnText' => 'Guardar'])
    
@endsection