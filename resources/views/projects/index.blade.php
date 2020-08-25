@extends('layout')


@section('title','Portafolio')


@section('content')
    <h1>Portafolio</h1>

    <a href="{{route('projects.create')}}"> Crear Proyecto</a>

    <ul>
    
    
        @forelse ($projects as $project)
             <li><a href="{{route('projects.show',$project)}}">{{$project->title}}</a></li>
        {{-- recibe un empty por si hay algun vacio --}}
        @empty
        
            <li>No hay proyectos a mostrar</li>

        @endforelse

            {{-- {{$proyects->links()}} --}}

         

 
    

    </ul>


@endsection