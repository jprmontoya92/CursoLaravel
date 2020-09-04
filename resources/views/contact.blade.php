@extends('layout')


@section('title','Contact')
    


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" action="{{route('messages.store')}}" method="POST">
                    <h1 class="display-4">Contact</h1>
                    <hr>
                    @csrf {{-- Directiva que nos protege de ataques xss, lo que hara esta directiva es agregar un campo oculto con un token para que laravel pueda identificar --}}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {{-- pongo las directivas de error dentro de la clase para cuando tenga error se despliege la clase de bootstrap is-invalid --}}
                        <input  class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0  @enderror "id="name" name="name" type="text" placeholder="Nombre..." value="{{old('name')}}">
                              {{-- una manera mas limpia de mostrar errores --}}
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{-- la variable message esta disponible directamente desde las directivas de error --}}
                                <strong>{{ $message }}</strong>
                            </span>
        
                        @enderror
                    </div>
              
        
                    <div class="form-group">
                        <label for="email">Email</label>
                        {{-- pongo las directivas de error dentro de la clase para cuando tenga error se despliege la clase de bootstrap is-invalid --}}
                        <input  class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0  @enderror "id="email" type="email" name="email"  placeholder="Email..." value="{{old('email')}}">
                    
                          {{-- una manera mas limpia de mostrar errores --}}
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{-- la variable message esta disponible directamente desde las directivas de error --}}
                                <strong>{{$message}}</strong>
                            </span>
        
                        @enderror
                    </div>
                  
        
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        {{-- pongo las directivas de error dentro de la clase para cuando tenga error se despliege la clase de bootstrap is-invalid --}}
                        <input  class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0  @enderror "id="subject" name="subject" type="text" placeholder="Asunto..." value="{{old('asunto')}}">
                             {{-- una manera mas limpia de mostrar errores --}}
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                {{-- la variable message esta disponible directamente desde las directivas de error --}}
                                <strong>{{$message}}</strong>
                            </span>
        
                        @enderror
                    </div>
               
        
                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        {{-- pongo las directivas de error dentro de la clase para cuando tenga error se despliege la clase de bootstrap is-invalid --}}
                        <textarea  class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0  @enderror "id="content" name="content" type="text" placeholder="Nombre..." value="{{old('name')}}"></textarea>
                
                            {{-- una manera mas limpia de mostrar errores --}}
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            {{-- la variable message esta disponible directamente desde las directivas de error --}}
                            <strong>{{$message}}</strong>
                        </span>
        
                @enderror
                    </div>
           
                   {{--  <input name="email" type="email" placeholder="Email..." value="{{old('email')}}"><br>
                    {!!$errors->first('email','<small>:message</small><br>')!!}
                    <input name="subject" type="text" placeholder="Asunto..." value="{{old('subject')}}"><br>
                    {!!$errors->first('subject','<small>:message</small><br>')!!}
                    <textarea name="content" type="text" placeholder="Mensaje..">{{old('content')}}</textarea><br>
                    {!!$errors->first('content','<small>:message</small><br>')!!} --}}
                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>

            </div>
        </div>
       
        
    
@endsection