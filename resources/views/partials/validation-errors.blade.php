 {{-- Verificamos si hay un algun tipo de error, forma mas sencilla para verificar errores --}}

 @if ($errors->any())
 <ul>
     @foreach ($errors->all() as $error)

         <li>{{$error}}</li>
         
     @endforeach
 </ul>
@endif