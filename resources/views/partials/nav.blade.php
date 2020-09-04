<nav class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">

    <a class="navbar-brand" href="{{route('home')}}">
        {{config('app.name')}}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('home')}}" href="{{route('home')}}">
                        @lang('Home')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('about')}}" href="{{route('about')}}">
                        @lang('About')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact')}}" href="{{route('contact')}}">
                        @lang('Contact')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.index')}}" href="{{route('projects.index')}}">
                        @lang('Projects')
                    </a>
                </li>
            
                {{-- si no estamos auntenficados o somo invitados, se va a mostrar el login --}}
                @guest
                <li>
                    <a class="nav-link {{ setActive('login')}}" href="{{route('login')}}">
                        Login
                    </a>
                </li>
                @else
            {{--  en primer casos el onclick va a prevenir que el link no redirija a otra pagina --}} 
                <li><a class="nav-link" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
                @endguest
            </ul>

        </div>
            
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>