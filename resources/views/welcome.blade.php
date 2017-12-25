<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('materialize/css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('materialize/css/style.css') }}" rel="stylesheet">

    </head>
    <body>
    {{--  Materialize Nav-Bar  --}}
        <nav class="darken-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">BrandCraft</a>
                <ul class="right hide-on-med-and-down">
                         <li><a href="{{ url('/about')}}">About Us</a></li>
                        <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                        @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Home</a></li> 
                            @else
                                {{--  <li><a href="{{ route('login') }}">Login</a></li>  --}}
                                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                        @endauth
                        @endif
                </ul>
            
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about')}}">About Us</a></li>
                    <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                    @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Home</a></li> 
                            @else
                                {{--  <li><a href="{{ route('login') }}">Login</a></li>  --}}
                                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                    @endauth
                    @endif
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
    </nav>
    {{--  END OF NAVIGATION  --}}

    {{--  BODY CONTENT  --}}

<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">BrandCraft</h1>
            <div class="row center">
            <h5 class="header col s12 light">Advertise your Brand with us Today!</h5>
            </div>
            <div class="row center">
            <a id="download-button" class="waves-effect waves-light btn modal-trigger" href="#modal1">How To?</a>
            </div>
            <br><br>

        </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>

    <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  

    {{--  BODY CONTENT CLOSE  --}}

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
          <h4 class="center">How to advertise with us</h4>
          <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Got It!</a>
        </div>
    </div>

    </body>
    <script src="{{ asset('materialize/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('materialize/js/init.js') }}"></script>

    <script>
            $(document).ready(function(){
                // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
              });
                      
    </script>
    
</html>
