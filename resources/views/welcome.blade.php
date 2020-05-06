

@section('title', 'Welcome')




    



   

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body  style=" background-color: #192b40";>


<style>
        #divv { font: 400 1em/1.5 "Neuton"; background: #090d00; color: rgba(255,255,255,.25); text-align: center; margin: 0 }

        #parag {
            text-transform: uppercase;
            letter-spacing: .5em;
            display: inline-block;
            border: 4px double rgba(255, 255, 255, .25);
            border-width: 4px 0;
            padding: 1.5em 0em;
            position: absolute;
            top: 18%;
            left: 50%;
            width: 40em;
            margin: 0 0 0 -20em;
        }

        #spaan {

            font: 700 4em/1 "Oswald", sans-serif;
            letter-spacing: 0;
            padding: .25em 0 .325em;
            display: block;
            margin: 0 auto;
            text-shadow: 0 0 80px rgba(255,255,255,.5);

            /* Clip Background Image */

            background: url(http://f.cl.ly/items/010q3E1u3p2Q0j1L1S1o/animated_text_fill.png) repeat-y;
            -webkit-background-clip: text;

            /* Animate Background Image */

            -webkit-text-fill-color: transparent;
            -webkit-animation: aitf 80s linear infinite;

            /* Activate hardware acceleration for smoother animations */

            -webkit-transform: translate3d(0,0,0);
            -webkit-backface-visibility: hidden;

        }


        /* Animate Background Image */

        @-webkit-keyframes aitf {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }



        #headerr{
            font-family: impact,'Oswald', sans-serif;
            font-size: 40px;
            text-shadow: 3px 3px rgba(10, 10, 10, 0.4);
            -webkit-transition: .3s;
            transition: .3s;
            color: black;
            text-align: center;

        }

        
        .student{
            width: 400px;
            margin: 4% auto;
            position: relative;
        }
        .srvc_icon{
            width: 29px;
            position: absolute;
        }
        .openBookIcon{
            top: 20%;
            right: 0;
        }






       /** body{
            font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
            background-color: #204d74;
        } **/




        .active {
            background-color: #4CAF50;
        }


        .button {
            background-color: #28324e; /* Green */
            border: none;
            color: white;
            padding: 7px 36px;
            text-align: center;
            text-decoration: solid;
            display: inline-block;
            font-size: 16px;
            font-family: Times;

            margin: 4px 2px;
            cursor: pointer;
   }

        .button2 {width: 50%;}
        .choix{
            padding-left:450px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
           
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

      
    </style>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'DSI-absence') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>



<span id="divv">
<p id="parag">
  <span id="spaan">
    Gestion d'absence
  </span>
</p>
</span>
<br/><br/><br/><br/><br/><br/><br/><br/>
<div class="student">
<svg id="student" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 385">
        <circle class="circle" style="display:none;" id="BG" opacity="0.2" cx="200.011" cy="208" r="157.657"/>
        <circle class="circle" style="display:none;" id="dashed" opacity="0.15" fill="none" stroke="#FFFFFF" stroke-width="1.9028" stroke-miterlimit="10" stroke-dasharray="6.5548" cx="200.333" cy="208" r="176.666"/>
        <g id="stud_whole" style="display:none;">
            <g id="stud_body">
                <path fill="#FFFFFF" d="M300,323v-9.401C300,268.536,255.131,232,200.241,232h-1.482
                                C143.869,232,99,268.536,99,313.599V323H300z"/>
                <path fill="#C99877" d="M251.2,240.3l-46.504,46.501c-2.868,2.869-7.521,2.869-10.391,0
                                L147.803,240.3C115.768,254.945,94,282.958,94,315.111V326h211v-10.889C305,282.958,283.232,254.945,251.2,240.3z"/>
                <path opacity="0.2" d="M251.2,240.3l-46.504,46.501c-2.868,2.869-7.521,2.869-10.391,0
                               L147.803,240.3C115.768,254.945,94,282.958,94,315.111V326l0,0c0-31.997,21.801-60.071,53.8-74.7l46.503,46.498
                               c2.869,2.872,7.522,2.872,10.392,0.001l46.505-46.499C283.197,265.93,305,294.003,305,326l0,0v-10.889
                               C305,282.958,283.232,254.945,251.2,240.3z"/>
            </g>
            <g id="stud_head">
                <path fill="#DDA37C" d="M135.934,194.953c-5.481,0-9.926-5.162-9.926-11.53s4.444-11.529,9.926-11.529"/>
                <path opacity="0.1" d="M261,190.046c0,36.915-27.145,66.838-61.5,66.838l0,0c-34.356,0-61.5-29.923-61.5-66.838v-23.247
                               c0-36.916,27.144-66.838,61.5-66.838l0,0c34.355,0,61.5,29.922,61.5,66.838V190.046z"/>
                <path fill="#FBD099" d="M266,185.046c0,36.915-29.589,66.838-66.5,66.838l0,0c-36.912,0-66.5-29.923-66.5-66.838v-23.247
                                c0-36.916,29.588-66.838,66.5-66.838l0,0c36.911,0,66.5,29.922,66.5,66.838V185.046z"/>
                <path fill="#F2C38F" d="M200.777,94.961c-1.348,0-2.754,0.052-4.08,0.13C224.17,105.823,243,131.293,243,161.013v24.819
                                c0,29.719-18.879,55.189-46.352,65.921c1.326,0.079,2.77,0.131,4.117,0.131c36.91,0,66.234-29.923,66.234-66.838v-23.247
                                C267,124.883,237.688,94.961,200.777,94.961z"/>
                <path fill="#DDA37C" d="M275.367,183.423c0-5.789-4.367-10.567-8.367-11.391v-10.233c0-36.916-29.312-66.838-66.223-66.838
                                c-1.467,0-3.011,0.063-4.451,0.157C231.151,97.365,258,126.349,258,161.799v23.247c0,35.449-26.896,64.434-61.723,66.681
                                c1.441,0.093,2.913,0.157,4.38,0.157c33.56,0,60.81-24.737,65.473-56.975C271.26,194.463,275.367,189.498,275.367,183.423z"/>
                <path fill="#99492C" d="M219.818,211.524c0,11.122-9.018,20.14-20.143,20.14c-11.124,0-20.143-9.018-20.143-20.14"/>
                <path fill="#FFFFFF" d="M219.818,211.285c0,1.709-0.213,3.715-0.613,4.715h-39.158c-0.289-1-0.514-3.003-0.514-4.832"/>

                <g class="eye">
                    <circle fill="#FFFFFF" cx="230.19" cy="178.929" r="9.551"/>
                    <path d="M230.19,173.222c-0.481,0-0.949,0.06-1.398,0.171c0.258,0.405,0.406,0.885,0.406,1.4c0,1.447-1.172,2.619-2.619,2.619
                   c-0.654,0-1.253-0.241-1.714-0.638c-0.283,0.681-0.44,1.429-0.44,2.214c0,3.184,2.581,5.764,5.766,5.764s5.766-2.58,5.766-5.764
                   C235.956,175.803,233.375,173.222,230.19,173.222z"/>
                </g>
                <g class="eye">
                    <circle fill="#FFFFFF" cx="170.802" cy="178.929" r="9.552"/>
                    <path d="M170.802,173.222c-0.482,0-0.949,0.06-1.398,0.171c0.257,0.405,0.407,0.885,0.407,1.4c0,1.447-1.174,2.619-2.62,2.619
                   c-0.655,0-1.254-0.241-1.714-0.638c-0.283,0.681-0.44,1.429-0.44,2.214c0,3.184,2.581,5.764,5.766,5.764s5.766-2.58,5.766-5.764
                   C176.567,175.803,173.986,173.222,170.802,173.222z"/>
                </g>
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#6B3815" d="M258,136v30.774c7-0.883,12-5.43,12-10.922V126H258z"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#6B3815" d="M147.109,164.33c-7.143,5.105-18.449,1.699-19.795-9.419
                                                                          c-10.266-58.371,21.152-60.824,21.152-60.824s-2.678-1.742-4.252-2.767c6.418-3.438,13.241-2.234,19.043,1.522
                                                                          C187.104,107.034,166.324,151.184,147.109,164.33z"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#4F260B" d="M166.006,96.921l-4.389,10.162
                                                                          c9.484,31.142-10.533,54.303-10.533,54.303C162.5,151.977,184.316,119.742,166.006,96.921z"/>
                    <g id="hair">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#6B3815" d="M201.883,146.219c1.371,2.254,2.523,4.146,4.095,6.729
                                                                            c-59.673-18.631-46.111-60.226-41.876-66.788c4.234-6.563,11.658-12.6,20.608-16.324c-0.481,1.902-0.858,3.393-1.235,4.888
                                                                            c22.131-7.764,49.002-0.148,63.532,10.733c4.941,3.701,9.703,7.613,14.57,11.401c8.224,6.396,17.896,9.472,28.993,10.778
                                                                            c-5.158,7.781-17.902,14.202-17.902,14.202s7.69,3.34,12.366,5.37C285.034,127.208,254.983,157.615,201.883,146.219z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#4F260B" d="M256.379,104.706c0,0,16.915,9.361,33.83,3.449
                                                                            c0,0-4.816,6.628-17.347,14.047C272.862,122.201,260.942,116.496,256.379,104.706z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#4F260B" d="M193.809,123.123c0,0,23.333,28.178,56.271,22.617
                                                                            c0,0-27.564,7.207-48.49,0.195C201.59,145.936,193.254,133.809,193.809,123.123z"/>
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" fill="#4F260B" d="M170.264,132.057
                                                                                          c-4.944,13.301-14.129,26.021-23.009,32.167c0.385-0.181,0.765-0.378,1.132-0.599c8.695-4.995,17.765-15.334,22.678-25.838
                                                                                          c6.094,6.406,16.153,12.604,32.137,17.391c-1.082-1.578-1.949-2.84-2.838-4.135C186.019,145.805,176.47,139.134,170.264,132.057z"
                        />
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" fill="#4F260B" d="M250.08,145.74c0,0-25.727,6.724-46.34,0.857
                                                                                          c-0.617-0.123-1.234-0.245-1.857-0.379c0.924,1.518,1.75,2.876,2.67,4.388c38.78,6.563,60.551-8.702,65.84-13.063
                                                                                          c-5.628,3.07-12.816,6.19-21.48,8.359C249.303,145.846,249.688,145.807,250.08,145.74z"/>
                    </g>
                </g>
                <g id="glasses">
                    <path opacity="0.25" fill="#4F260B" d="M247.237,159h-27.354c-7.833,0-13.884,5.873-13.884,13.706v1.214
                                                 c-3.499-1.489-7.455-1.561-11-0.22v-0.994c0-7.833-5.929-13.706-13.763-13.706h-27.354c-7.833,0-13.884,5.873-13.884,13.706v15.78
                                                 c0,7.833,6.051,14.514,13.884,14.514h27.354c7.834,0,13.763-6.681,13.763-14.514v-8.007c3.274-2.459,7.891-2.309,11,0.452v7.555
                                                 c0,7.833,6.051,14.514,13.884,14.514h27.354c7.834,0,13.763-6.681,13.763-14.514v-15.78C261,164.873,255.071,159,247.237,159z
                                                 M189,188.486c0,4.532-3.23,8.514-7.763,8.514h-27.354c-4.531,0-7.884-3.981-7.884-8.514v-15.78c0-4.532,3.353-7.706,7.884-7.706
                                                 H181h0.237c4.532,0,7.763,3.174,7.763,7.706V188.486z M255,188.486c0,4.532-3.23,8.514-7.763,8.514h-27.354
                                                 c-4.531,0-7.884-3.981-7.884-8.514v-15.78c0-4.532,3.353-7.706,7.884-7.706H247h0.237c4.532,0,7.763,3.174,7.763,7.706V188.486z"/>
                    <path fill="none" stroke="#000000" stroke-width="6" stroke-miterlimit="10" d="M208.506,176.158
                                                                                        c-4.578-4.577-11.986-4.577-16.563,0"/>
                    <path d="M247.237,162c4.532,0,7.763,3.174,7.763,7.706v15.78c0,4.532-3.23,8.514-7.763,8.514h-27.354
                   c-4.531,0-7.884-3.981-7.884-8.514v-15.78c0-4.532,3.353-7.706,7.884-7.706H247 M247.237,156h-27.354
                   c-7.833,0-13.884,5.873-13.884,13.706v15.78c0,7.833,6.051,14.514,13.884,14.514h27.354c7.834,0,13.763-6.681,13.763-14.514
                   v-15.78C261,161.873,255.071,156,247.237,156L247.237,156z"/>
                    <path opacity="0.3" fill="#FFFFFF" d="M257,168.327c0-4.599-3.729-8.327-8.329-8.327h-30.342c-4.6,0-8.329,3.728-8.329,8.327
                                                v19.346c0,4.599,3.729,8.327,8.329,8.327h30.342c4.6,0,8.329-3.728,8.329-8.327V168.327z"/>

                    <path class="reflection" opacity=".3" fill="#FFFFFF" d="M226.629,160l-13.033,34.105c1.407,1.09,3.168,1.895,5.086,1.895h11.383l13.703-36H226.629z"/>

                    <path d="M181.237,162c4.532,0,7.763,3.174,7.763,7.706v15.78c0,4.532-3.23,8.514-7.763,8.514h-27.354
                   c-4.531,0-7.884-3.981-7.884-8.514v-15.78c0-4.532,3.353-7.706,7.884-7.706H181 M181.237,156h-27.354
                   c-7.833,0-13.884,5.873-13.884,13.706v15.78c0,7.833,6.051,14.514,13.884,14.514h27.354c7.834,0,13.763-6.681,13.763-14.514
                   v-15.78C195,161.873,189.071,156,181.237,156L181.237,156z"/>
                    <path opacity="0.35" fill="#FFFFFF" d="M191,168.327c0-4.599-3.729-8.327-8.329-8.327h-30.342c-4.6,0-8.329,3.728-8.329,8.327
                                                 v19.346c0,4.599,3.729,8.327,8.329,8.327h30.342c4.6,0,8.329-3.728,8.329-8.327V168.327z"/>

                    <path class="reflection" opacity="0.3" fill="#FFFFFF" d="M160.629,160l-13.033,34.105c1.407,1.09,3.168,1.895,5.086,1.895h11.383l13.703-36H160.629z"/>
                </g>
            </g>
        </g>
        <rect id="clip" x="11" y="344" fill="#192B40" width="372" height="54"/>
        <g id="book" >
            <path id="bk_bdy" fill="#31A7DB" d=""/>
            <path id="bk_edg" fill="none" stroke="#037391" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" d=""/>
            <polygon id="btm_pgs" fill="#D3D3D3"/>
            <polygon id="btm_r" fill="#F2F2F2" points=""/>
            <polygon id="btm_l" fill="#f0f0f0" points=""/>
            <polygon id="line" opacity="0" fill="#D3D3D3" points="201,326 198,326 199,299 200,299"/>
            <path opacity="0" id="pgFld" fill="#f2f2f2" d="M199.235,299c0,0,55.694-1,102-1L354,325   c-85.08,0-153.765,1-153.765,1L199.235,299z"></path>
            <animate
                    xlink:href="#pgFld" attributeName="d" begin="4s" dur="5s" repeatCount="indefinite"
                    keyTimes="0;
                         .03;
                         .06;
                         .1;
                         .15;
                         1"
                    values="
                       M199,299c0,0-55.695-1-102-1l-52.765,27   c85.08,0,153.765,1,153.765,1L199,299z;
                       M199,299c0,0-15.446-45.394-71.818-42.365L99,271   c68.5-11.504,99,54.5,99,54.5L199,299z;
                       M199,299c0,0-1-30-2.352-74.5l-0.371,4.5   c5.578,43.393,1.723,97,1.723,97L199,299z;
                       M199,299c0,0,51.08,6,58.769-47.116l15.36,12.779   C273.129,323,198,326,198,326L199,299z;
                       M199.235,299c0,0,55.694-1,102-1L354,325   c-85.08,0-153.765,1-153.765,1L199.235,299z;
                       M199.235,299c0,0,55.694-1,102-1L354,325   c-85.08,0-153.765,1-153.765,1L199.235,299z
                       "/>
        </g>
        <g  opacity="0.3">
            <path style="display:none;" class="stars" fill="#FFFFFF" d="M280.252,56.796c0.255-0.466,0.673-0.466,0.928,0l1.214,2.22
                                            c0.255,0.466,0.846,1.056,1.312,1.312l2.219,1.213c0.466,0.255,0.466,0.672,0,0.927l-2.219,1.214
                                            c-0.466,0.255-1.057,0.845-1.312,1.311l-1.214,2.22c-0.255,0.466-0.673,0.466-0.928,0l-1.213-2.22
                                            c-0.255-0.466-0.846-1.056-1.312-1.311l-2.22-1.214c-0.466-0.255-0.466-0.672,0-0.927l2.22-1.214
                                            c0.466-0.255,1.057-0.845,1.312-1.311L280.252,56.796z"/>
            <path style="display:none;" class="stars" fill="#FFFFFF" d="M196.203,37.407c0.219-0.401,0.579-0.401,0.798,0l1.046,1.911
                                            c0.219,0.401,0.727,0.909,1.128,1.128l1.909,1.045c0.401,0.219,0.401,0.579,0,0.798l-1.909,1.044
                                            c-0.401,0.219-0.909,0.727-1.128,1.128L197,46.374c-0.219,0.401-0.579,0.401-0.798,0l-1.045-1.911
                                            c-0.219-0.401-0.727-0.909-1.128-1.128l-1.91-1.044c-0.401-0.219-0.401-0.579,0-0.798l1.91-1.045
                                            c0.401-0.219,0.909-0.727,1.128-1.128L196.203,37.407z"/>
            <path style="display:none;" class="stars" fill="#FFFFFF" d="M44.003,195.166c0.329-0.602,0.868-0.602,1.197,0l1.568,2.867
                                            c0.329,0.602,1.091,1.364,1.693,1.693l2.864,1.567c0.602,0.329,0.602,0.868,0,1.197l-2.864,1.566
                                            c-0.602,0.329-1.364,1.091-1.693,1.693l-1.568,2.865c-0.329,0.603-0.868,0.603-1.197,0l-1.566-2.865
                                            c-0.329-0.603-1.091-1.364-1.693-1.693l-2.865-1.566c-0.602-0.329-0.602-0.868,0-1.197l2.866-1.567
                                            c0.602-0.329,1.363-1.091,1.692-1.693L44.003,195.166z"/>
            <path style="display:none;" class="stars" fill="#FFFFFF" d="M91.01,119.478c0.151-0.277,0.399-0.277,0.551,0l0.722,1.32
                                            c0.152,0.277,0.502,0.628,0.78,0.78l1.318,0.721c0.277,0.152,0.277,0.4,0,0.552l-1.318,0.721c-0.277,0.152-0.628,0.502-0.78,0.78
                                            l-0.722,1.32c-0.152,0.277-0.4,0.277-0.551,0l-0.722-1.32c-0.151-0.277-0.502-0.628-0.779-0.779l-1.319-0.722
                                            c-0.277-0.151-0.277-0.399,0-0.551l1.319-0.722c0.277-0.152,0.628-0.502,0.779-0.78L91.01,119.478z"/>
            <path style="display:none;" class="stars" fill="#FFFFFF" d="M344.458,162.397c0.18-0.329,0.475-0.33,0.654,0l0.857,1.567
                                            c0.18,0.33,0.597,0.746,0.926,0.926l1.565,0.856c0.329,0.18,0.329,0.475,0,0.655l-1.565,0.857
                                            c-0.329,0.18-0.746,0.596-0.926,0.926l-0.857,1.567c-0.18,0.33-0.475,0.329-0.654,0l-0.856-1.567
                                            c-0.18-0.329-0.597-0.746-0.926-0.926l-1.566-0.857c-0.329-0.18-0.329-0.475,0-0.654l1.566-0.857
                                            c0.329-0.18,0.746-0.597,0.926-0.926L344.458,162.397z"/>
        </g>
    </svg>
</div>
<div id="headerr">
            <h3><b>Consulter la situation d'absence :</b></h3>
        </div>

        <div class="choix">
            <a ><button class="button button2">CONSULTATION PAR ETUDIANT</button></a>
            <a><button class="button button2">CONSULTER PAR CLASSE</button></a>
            <a><button class="button button2">CONSULTER TOUS</button></a>
        </div>


<script type="text/javascript">
    //GSAP variables
    var master = new TimelineMax({delay:1.5}),
            student = $("#student"),
            studentWhole = $('#stud_whole'),
            head = $('#stud_head'),
            eyes = $('.eye'),
            reflection = $('.reflection'),
            hair = $('#hair'),
            body = $('#stud_body'),
            pgFld = $("#pgFld"),
            stars = $(".stars"),
            circle = $(".circle"),
            dashed = $("#dashed"),
            servicesIcons = $(".srvc_icon"),
            pageFold = $("#pgFld");

    //book snap variables
    var s = Snap("#student");
    bottomPages = s.select("#btm_pgs"),
            bottomEdge = s.select("#bk_edg"),
            bottomBody = s.select("#bk_bdy"),
            bottomRight = s.select("#btm_r"),
            bottomLeft = s.select("#btm_l"),
            line = s.select("#line");


    bottomPages.attr({points:"199.827,333.441 200.188,334 198.801,334 198.14,333.344 190.077,333.696 190,333 209,333 208.487,333.463"});
    bottomEdge.attr({ d:"M184.5,332l0.5,9.5c0,0,5.635,7,14.661,7s14.839-7,14.839-7V332"});
    bottomBody.attr({ d:"M205.94,333H200h-7.524l-8.602,0.26l0.639,4.74 c0,0,0.044,0.473,0.138,0.637c0.779,1.371,4.964,7.938,15.35,7.938c10.182,0,14.449-6.029,15.356-7.561 c0.13-0.219,0.191-0.299,0.191-0.299l0.664-5.716H205.94z"});
    bottomRight.attr({ points:"199,326 199.016,326 199.7,326 199,326"});
    bottomLeft.attr({ points:"199,326 199.016,326 198.359,325.984 199,326"});

    function bookIn() {
        bottomPages.animate({ points:"199,174 200,305 200,304 199,174 190,174 190,333 209,333 209,174"}, 350,mina.easeInOut,function(){
            setTimeout(function(){
                bottomPages.animate({ points:"313.061,304.975 200.188,305 198.801,305 85.44,304.975 30.5,333 190,333 209,333 370,333"}, 1000, mina.bounce);
            },350)
        });

        bottomEdge.animate({ d:"M184.5,169l0.5,172.5c0,0,5.635,7,14.661,7s14.839-7,14.839-7V169"}, 350,mina.easeInOut,function(){
            setTimeout(function(){
                bottomEdge.animate({ d:"M13,341.5h172.224c0,0,5.973,7,15,7s14.776-7,14.776-7h172"}, 1000,mina.bounce);
            },350)
        });

        bottomBody.animate({ d:"M205.94,174L200,307l-7.524-133l-8.602,0.26L184.512,338 	c0,0,0.044,0.473,0.138,0.637c0.779,1.371,4.964,7.938,15.35,7.938c10.182,0,14.449-6.029,15.356-7.561 c0.13-0.219,0.191-0.299,0.191-0.299L216.212,174H205.94z"}, 350,mina.easeInOut,function(){
            setTimeout(function(){
                bottomBody.animate({ d:"M328.178,308.28L200,307.238L72.591,308.28 l-60.046,30.913l171.995-0.196c0,0,0.016,0.49,0.11,0.654c0.779,1.371,4.964,6.932,15.35,6.932 c10.182,0,14.449-6.033,15.356-7.564c0.13-0.219,0.191-0.063,0.191-0.063L387.241,339L328.178,308.28z"}, 1000,mina.bounce);
            },350)
        });

        bottomRight.animate({ points:"199,299 199.016,174 199.7,174 199,326"}, 350,mina.easeInOut,function(){
            setTimeout(function(){
                bottomRight.animate({ points:"199,299 300.647,299 355.376,326 199,326"}, 1000,mina.bounce);
            },350)
        });

        bottomLeft.animate({ points:"199,299 199.016,174 198.359,173.984 199,326"}, 350,mina.easeInOut,function(){
            setTimeout(function(){
                line.attr({opacity:1});
                bottomLeft.animate({ points:"199,299 96,299 44,326 199,326"}, 1000,mina.bounce);

            },350)

        });
    }

    master.set([studentWhole,stars,circle],{css:{display:'block'}})
            .add( circleScale())
            .add('circleEnd')
            .add(bodyRotateIn(),'circleEnd -= 1.25')
            .add( repeatAnim(),'circleEnd -= 1')
            .call(bookIn())


    //circles scale in
    function circleScale(){
        var tl = new TimelineMax();
        tl.staggerFrom(circle,.7, {transformOrigin:"50% 100%",scale:0,ease:Back.easeOut},0.2, 'cirlceIn')
                .staggerFrom(stars,1, {transformOrigin:"50% 50%",scale:0,opacity:0,ease:Elastic.easeOut},0.1,'cirlceIn+=.5')
        return tl;
    }

    //body rotate in animation
    function bodyRotateIn (){
        var tl = new TimelineMax();
        tl.from(studentWhole,.5, {rotation:90, transformOrigin:"106 260",scale:0, fillOpacity:.5},'bodyRotation')
                .from(head,.5,{rotation:45, transformOrigin:"85 180",ease:Back.easeOut},"bodyRotation+=.35")
                .from(hair,2,{rotation:15, transformOrigin:"10 50%",ease:Elastic.easeOut},"bodyRotation+=.37");
        tl.set(pageFold, {opacity:1});
        tl.timeScale(1.5);
        return tl;
    }

    // reapeated animations
    function repeatAnim (){
        var tl = new TimelineMax({repeat:-1});
        tl.to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"},'repeatStart')
                .to(eyes,.1, {rotationX:0})
                .to(eyes,3, {rotationX:0})
                .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
                .to(eyes,.1, {rotationX:0})
                .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
                .to(eyes,.1, {rotationX:0})
                .to(eyes,4, {rotationX:0})
                .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
                .to(eyes,.1, {rotationX:0})
                .to(eyes,3, {rotationX:0})
                .to(reflection,1.5,{x:12,opacity:.15},1,'repeatStart')
                .to(reflection,4,{x:12,opacity:.35},2.5)
                .to(reflection,1,{x:0,opacity:.1},4)
                .to(reflection,4,{x:0,opacity:.15})
                .to(dashed,15,{rotation:180,transformOrigin:"50% 50%", ease:Linear.easeNone},'repeatStart')


        return tl;
    }










</script>

</div>
</section>
