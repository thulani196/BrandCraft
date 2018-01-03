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
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('materialize/css/style.css') }}" rel="stylesheet">

        {{--  <style>
            body {
              
              height: 370px;
              background-size: 100% 100%;
              background-repeat: no-repeat;
              postion:relative;
              padding: 0;
              margin: 0;
              overflow: hidden;
              background-position: top center;
              background-attachment: fixed;
            }
            style="background-image:url('images/wallpaper.jpg'); "
        </style>  --}}

    </head>
    <body>
    {{--  Materialize Nav-Bar  --}}
    <div class="">
        <nav class="red darken-4 " role="navigation">
            <div class=" nav-wrapper container ">
                <a id="logo-container" href="#" class="brand-logo white-text">
                  <img class="" width="140px" height="80px" style="padding-top:10px;" src="{{ asset('images/logo.jpg') }}">
                </a>
                <ul class="right hide-on-med-and-down ">
                    <li><a class="white-text " href="{{ url('/products') }}">Products</a></li>
                    <li><a class="white-text " href="{{ url('/requests') }}">Request for a service</a></li>
                        {{--  <li><a href="{{ url('/about')}}" class="white-text">About Us</a></li>  --}}
                        {{--  <li><a href="{{ url('/contact')}}" class="white-text">Contact Us</a></li>  --}}
                        @if (Route::has('login'))
                            @auth
                               <li ><a href="{{ url('/home') }}" class="white-text">Dashboard</a></li> 
                            @else
                                {{--  <li><a href="{{ route('login') }}">Login</a></li>  --}}
                                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                        @endauth
                        @endif
                </ul>
            
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="" href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/requests') }}">Request for a service</a></li>
                    {{--  <li><a href="{{ url('/about')}}">About Us</a></li>  --}}
                    {{--  <li><a href="{{ url('/contact')}}">Contact Us</a></li>  --}}
                    @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Dashboard</a></li> 
                            @else
                                {{--  <li><a href="{{ route('login') }}">Login</a></li>  --}}
                                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                    @endauth
                    @endif
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="fa fa-bars white-text" aria-hidden="true"></i></a>
            </div>
    </nav>
  </div>
    {{--  END OF NAVIGATION  --}}

    {{--  BODY CONTENT  --}}

<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center white-text text-darken-4">BrandCraft</h1>
            <div class="row center">
            <h5 class="header col s12 white-text text-darken-4">Africa's Favorite Signage Company</h5>
            </div>
            <div class="row center">
            <a id="download-button" class="waves-effect waves-light btn red darken-4 modal-trigger" href="#modal1">CONTACT US</a>
            
            </div>

            
            <br><br>

        </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>

    <div class="container">
    <div class="section card-panel white">
      <h5 class="center-align red-text text-darken-4">Our Services</h5>
      <div class="row">

        <div class="col l3 s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="fa fa-building-o" aria-hidden="true"></i></h2>
            <h5 class="center red-text text-darken-4">Scaffold Hire</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col l3 s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="fa fa-superpowers" aria-hidden="true"></i></h2>
            <h5 class="center red-text text-darken-4">Branding</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col l3 s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="fa fa-cubes" aria-hidden="true"></i></h2>
            <h5 class="center red-text text-darken-4">Signage Installation</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>

        <div class="col l3 s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="fa fa-industry" aria-hidden="true"></i></h2>
              <h5 class="center red-text text-darken-4">Signage and Vehicle Branding</h5>
  
              <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
            </div>
          </div>

      </div>

    </div>
  </div>

{{--  PARALAX-CONTAINER  --}}
<div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
      <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2"></h1>
          <div class="row center">
          {{--  <h5 class="header col s12 light">Advertise your Brand with us Today!</h5>  --}}
          </div>
          <div class="row center">
          {{--  <a id="download-button" class="waves-effect waves-light btn modal-trigger" href="#modal1">How To?</a>  --}}
          </div>
          <br><br>

      </div>
      </div>
      <div class="parallax"><img src="{{ asset('images/background2.jpg') }}" alt="Unsplashed background img 1"></div>
</div>

{{--  PORTFOLIO SECTION  --}}
<div class="container">
    <div class="section">
      <h5 class="center-align red-text text-darken-4 card-panel white">Portfolio</h5>
      
      <div class="row">

          <div class="col l4 s12 m7">
            <div class="card z-depth-4">
              <div class="card-image">
                <img src="{{ asset('images/background1.jpg') }}" height="200px" width="100%">
                <span class="card-title">Card Title</span>
              </div>

              <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque 
                      id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna 
                      fermentum ac. </p>
              </div>
            </div>
          </div>

          <div class="col l4 s12 m7">
              <div class="card z-depth-4">
                <div class="card-image">
                  <img src="{{ asset('images/background2.jpg') }}" height="200px" width="100%">
                  <span class="card-title">Card Title</span>
                </div>
  
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque 
                        id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna 
                        fermentum ac. </p>
                </div>
              </div>
            </div>

            <div class="col l4 s12 m7">
                <div class="card z-depth-4">
                  <div class="card-image">
                    <img src="{{ asset('images/background3.jpg') }}" height="200px" width="100%">
                    <span class="card-title">Card Title</span>
                  </div>
    
                  <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque 
                      id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna 
                      fermentum ac. </p>
                  </div>
                </div>
              </div>

        </div>

    </div>
  </div>
  
  {{--  PARALAX-CONTAINER  --}}
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
    <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"></h1>
        <div class="row center">
        {{--  <h5 class="header col s12 light">Advertise your Brand with us Today!</h5>  --}}
        </div>
        <div class="row center">
        {{--  <a id="download-button" class="waves-effect waves-light btn modal-trigger" href="#modal1">How To?</a>  --}}
        </div>
        <br><br>

    </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background3.jpg') }}" alt="Unsplashed background img 1"></div>
</div>

{{--  ABOUT US SECTION  --}}
<div class="container">
    <div class="section card-panel white">
      <h5 class="center-align red-text text-darken-4 ">About Us</h5>
      <div class="row">
        <p class="light justify-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id 
          nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. 
          Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. 
          Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend 
          sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi 
          massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim 
          mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus 
          et ultrices posuere cubilia Curae;
        </p>
      </div>
    </div>
    {{--  <div class="section card-panel white">
        <h5 class="center-align red-text text-darken-4">Contact Us</h5>
        <div class="row">
  
              {{--  CONTACT US DETAILS   --}}
  
        </div>
  
      </div> 
  </div>

    {{--  PARALAX-CONTAINER  --}}


      {{--  PARALAX-CONTAINER  --}}
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
    <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"></h1>
        <div class="row center">
        {{--  <h5 class="header col s12 light">Advertise your Brand with us Today!</h5>  --}}
        </div>
        <div class="row center">
        {{--  <a id="download-button" class="waves-effect waves-light btn modal-trigger" href="#modal1">How To?</a>  --}}
        </div>
        <br><br>
    </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>

  </div>

    {{--  BODY CONTENT CLOSE  --}}
    <!-- Contact Details Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
          <h4 class="center" style="font-size:24px; color:rgb(250,10,10)">Contact us!</h4>
          <p style="text-align:center">Location:16 prospect hill Kapumpe rd, off Yotamu Muleya rd</p>
          <p style="text-align:center">Call us: <a href="tel:+260979568223" ><i class="fa fa-phone">+260 979 568 223</i></a></p>
          <p style="text-align:center">Email us: <a href="mailto:brandcraft@gmail.com" ><i class="fa fa-email">Brandcraft@gmail.com</i></a></p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Got It!</a>
        </div>
    </div>
    
{{--  FOOTER  --}}
<footer class="page-footer red darken-4">
  <div class="container">
    <div class="row">

    </div>
    
  </div>
  <div class="footer-copyright ">
      <div class="container">
          © 2017, All rights reserved.
          <div class="right">BrandCraft Co.</div>
      </div>
  </div>
</footer>

    </body>
    <script src="{{ asset('materialize/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('materialize/js/init.js') }}"></script>

    <script>
            $(document).ready(function(){
                // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
              });

              $(document).ready(function() {
                $('select').material_select();
              });
                      
    </script>
    
</html>
