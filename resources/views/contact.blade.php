@extends('layout')


@section('title','Contact')
    


@section('content')
    <h1>Contact</h1>
        <form action="{{route('messages.store')}}" method="POST">
            @csrf {{-- Directiva que nos protege de ataques xss, lo que hara esta directiva es agregar un campo oculto con un token para que laravel pueda identificar --}}
            <input name="name" type="text" placeholder="Nombre..." value="{{old('name')}}"><br>
            {!!$errors->first('name','<small>:message</small><br>')!!}
            <input name="email" type="email" placeholder="Email..." value="{{old('email')}}"><br>
            {!!$errors->first('email','<small>:message</small><br>')!!}
            <input name="subject" type="text" placeholder="Asunto..." value="{{old('subject')}}"><br>
            {!!$errors->first('subject','<small>:message</small><br>')!!}
            <textarea name="content" type="text" placeholder="Mensaje..">{{old('content')}}</textarea><br>
            {!!$errors->first('content','<small>:message</small><br>')!!}
            <button>Enviar</button>
        </form>    
    
@endsection