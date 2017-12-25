<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--  Icons  --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('materialize/css/materialize.min.css') }}" rel="stylesheet">
     <link href="{{ asset('materialize/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >

        <ul id="dropdown1" class="dropdown-content ">
           @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
            @else
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
            
        </ul>

        <nav class="">
        <div class="nav-wrapper container" role="navigation">
            <a href="{{ url('/') }}" class="brand-logo">BrandCraft</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about')}}">About Us</a></li>
                <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                <!-- Dropdown Trigger -->
                @guest
                @else 
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                @endguest
                
            </ul>

             <ul id="nav-mobile" class="side-nav">
                    {{--  <li><a href="{{ url('/') }}">Home</a></li>  --}}
                    <li><a href="{{ url('/about')}}">About Us</a></li>
                    <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                    @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Home</a></li> 
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                    @endauth
                    @endif
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
        </nav>
        
        @yield('content')




    </div>
    <!-- Scripts -->
    <script src="{{ asset('materialize/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('materialize/js/init.js') }}"></script>
</body>
</html>
