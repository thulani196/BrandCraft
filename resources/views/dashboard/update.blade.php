@extends('layouts.app')
@section('content')
<div class="container"><br><br><br>
    <div class="row">
        <div class="col center-align l12 m12 s12 card-panel z-depth-3">
            <section>
                <div class="row">
                    <h5 class="center-align red-text text-darken-4">Register new admin</h5>
                    <form class="form" method="POST" action="/home/admins/{{$user->id}}">
                        {{ method_field("PUT") }}
                        {{ csrf_field() }}
                        <div class="col l6 m6 s12 input-field">
                            <input type="text" name="fullname" value="{{$user->name}}" class="validate">
                            <label for="full_name">Full Name:</label>
                        </div>
                        <div class="col l6 m6 s12 input-field">
                                <input type="email" value="{{$user->email}}" name="email" class="validate">
                                <label for="email" data-error="wrong email format">Email Address:</label>
                        </div>

                        <div class="col l6 m12 s12 input-field">
                                <input type="password" name="password" class="validate">
                                <label for="password">Password:</label>
                        </div>

                        <div class="col l6 m12 s12 input-field">
                                <input type="password" name="password_confirmation" class="validate">
                                <label for="c_pwd">Confirm Password:</label>
                        </div>

                        <div class="col l12 s12 m6 input-field">
                            <select name="roles">
                              <option value="" disabled selected>Choose a role</option>
                              @if(count($roles)  > 0 )
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ $role->role}}</option>
                                @endforeach
                              @endif
                            </select>
                            <label>Admin Role:</label>
                          </div>

                        <div class="col l12 m12 s12 ">
                            <div class="col l12 m12 s12 center-align">
                                <input type="submit" class="btn red darken-4 " name="update" value="Send Request">
                              </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
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

@endsection