


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Gestion-absences') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
            @auth
                <ul class="navbar-nav mr-auto">
                    @if (Auth:: user()->role=="admin")
               
                  
                    
                  
              
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ route('users.index') }}" >student</a>
                    
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/indexteacher') }}" class="nav-link">teacher</a>
                        </li>
                        <!-- <li class="nav-item"> -->
                            <a href="{{ url('admin/affichemodul') }}" class="nav-link">modul</a>
                        </li>
                     
                    @elseif (Auth:: user()->role=="student")
                   
                        <li class="nav-item">
                            <a class="nav-link">profil</a>
                        </li>
                        


                        @else 
                  
                        <li class="nav-item">
                            <a  href="{{ url('teacher/affichprofil') }}"class="nav-link"> Profil</a>
                        </li>
                        <li class="nav-item">
                            <a  href="#"class="nav-link"> Seance</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('teacher/indexteacher') }}"class="nav-link"> Student list</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Show absences</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">gerer la gestion des ab</a>
                        </li>

                    @endif
                </ul>
            @endauth

              <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>