


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
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">register</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="{{ url('admin/createuser') }}">register user</a>
                            <a class="dropdown-item" href="{{ route('modul.create') }}">register modul</a>
                            <a class="dropdown-item" href="{{ route('classe.create') }}">register classe</a>
                          
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ route('users.index') }}" >student</a>
                    
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/indexteacher') }}" class="nav-link">teacher</a>
                        </li>
                        <!-- <li class="nav-item"> -->
                            <a href="{{ route('modul.index') }}" class="nav-link">modul</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ route('classe.index') }}" >classe</a>
                    
                        </li>
                    @elseif (Auth:: user()->role=="student")
                   
                    <li class="nav-item">
                            <a  href="{{ url('/profile') }}" class="nav-link">Profile</a>
                        </li>
                        


                        @else 
                        <li class="nav-item">
                            <a  href="{{ url('/profile') }}" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('teacher/affichemodul') }}"class="nav-link"> Principal page</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('teacher/student') }}" class="nav-link"> Etudiant par classe</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('teacher/seance') }}"class="nav-link">Créer seance</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('teacher/affichestudent') }}" class="nav-link">Gestion des absences</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Liste des absences 
                            </a>
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
                    

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative;" v-pre>
                        <img src="/uploads/avatars/{{ Auth::user()->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="fa fa-btn fa-sign-out">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                         <!--**************************-->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('profile-form').submit();" class="fa fa-btn fa-user">
                                {{ __('Profile') }}
                            </a>

                            <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>