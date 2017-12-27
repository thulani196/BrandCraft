@extends('layouts.app')

@section('content')
<div class="container"><br><br>
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <h5 class="center-align red-text text-darken-4">Dashboard</h5>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                            <div class="col l4 s12 m6">
                              <div class="card">
                                <div class="card-image">
                                  <img src="{{asset('images/wallpaper.jpg')}}" height="200px" width="100%">
                                  <span class="card-title white-text text-darken-4">Adverts</span>
                                </div>
                               
                                <div class="card-action ">
                                  <a href="/home/adverts" class="red-text text-darken-4">Manage Adverts</a>
                                </div>
                              </div>
                            </div>

                            <div class="col l4 s12 m6">
                                    <div class="card">
                                      <div class="card-image">
                                        <img src="{{asset('images/background1.jpg')}}" height="200px" width="100%">
                                        <span class="card-title white-text text-darken-4">Admins</span>
                                      </div>
                                     
                                      <div class="card-action">
                                        <a href="/home/admins" class="red-text text-darken-4">Manage Admins</a>
                                      </div>
                                    </div>
                            </div>

                            <div class="col l4 s12 m6">
                                    <div class="card">
                                      <div class="card-image">
                                        <img src="{{asset('images/background1.jpg')}}" height="200px" width="100%">
                                        <span class="card-title white-text text-darken-4">Service Requests</span>
                                      </div>
                                     
                                      <div class="card-action">
                                        <a href="/home/requests" class="red-text text-darken-4">Manage Service Request</a>
                                      </div>
                                    </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
