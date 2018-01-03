@extends('layouts.app')
@section('content')
    <div class="container"><br><br>
        <div class="row">
            @if(count($adverts) > 0)
                @foreach($adverts as $advert)
                    <div class="col l4 m4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="/storage/cover_images/{{$advert->image }}" height="230px" width="100%">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>{{$advert->description}}</p>
                            </div>
                            <div class="card-action red darken-4">
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
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
@endsection