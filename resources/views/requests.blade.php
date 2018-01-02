@extends('layouts.app')
@section('content')

    <div class="container">
        <h4 class="center text-red text-darken-4">Request for a service</h4>
        <div class="container">
          <div class="row card-panel z-depth-3">
            <form class="form" action="" method="POST">
              {{ csrf_field() }}
                <div class="col l6 m6 s12 input-field">
                  <input type="text" name="fullname" class="validate">
                  <label for="full_name">Full Name:</label>
                </div>

                <div class="col l6 m6 s12 input-field">
                    <input type="text" name="organization" class="validate">
                    <label for="org_name">Organization Name:</label>
                </div>

                <div class="col l6 m6 s12 input-field">
                    <input type="text" name="personal_number" class="validate">
                    <label for="personal_number">Personal Number:</label>
                </div>

                <div class="col l6 m6 s12 input-field">
                    <input type="text" name="org_number" class="validate">
                    <label for="org_number">Organization Number:</label>
                </div>

                <div class="col l6 s12 m6 input-field">
                    <select name="service">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select</label>
                  </div>

                <div class="col l6 m6 s12 input-field">
                    <input type="date" name="date" class="validate" placeolder="Prefered Date of Service:">
                    {{--  <label for="org_name">Prefered Date of Service:</label>  --}}
                </div>

                <div class="col l12 m12 s12 center-align">
                  <input type="submit" class="btn red darken-4 " name="submit" value="Send Request">
                </div>
                 

            </form>
          </div>
        </div>
    </div>



@endsection