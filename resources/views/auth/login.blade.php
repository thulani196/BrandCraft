@extends('layouts.app')

@section('content')

{{--  <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
        <div class="container">
            <br>
            <h1 class="header center teal-text text-lighten-2">BrandCraft</h1>
            <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            
          

        </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>  --}}


<div class="container">
    <div class="row"><br/><br/>
        <div class="col l12-center m12 s12 pad-bot">
            <div class="card-panel z-depth-4">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="row">
                                        <div class="input-field col s12">
                                          <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                                          @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                          <label for="email">Email</label>
                                        </div>
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="row">
                                        <div class="input-field col s12">
                                          <input id="password" type="password" class="validate" required>
                                          @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                          @endif
                                          <label for="password">Password</label>
                                        </div>
                                </div>
                        </div>

                        <div class="form-group">
                                <p>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="filled-in" id="filled-in-box" checked="checked" />
                                        <label for="filled-in-box">Remember Me</label>
                                </p>

                        </div>

                        <div class="form-group">

                             
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn">
                                    Login
                                </button>

                                <a class="btn" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
