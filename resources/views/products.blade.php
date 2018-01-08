@extends('layouts.app')
@section('content')
    <div class="container"><br><br>
        <div class="row">
                <h3 class="center-align red-text text-darken-4">Our Products</h3>
            @if(count($adverts) > 0)
                @foreach($adverts as $advert)
                    <div class="col l4 m4 s12">
                        
                        <div class="card">
                            <div class="card-image">
                                <img src="/storage/cover_images/{{$advert->image }}" height="230px" width="100%">
                                <span class="card-title white-text darken-5">{{$advert->title}}</span>
                            </div>
                            <div class="card-content">
                                <p>{{$advert->description}}</p>
                            </div>
                            <div class="card-action red darken-4">
                                
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col l12 m12 s12">
                    <div class="pagination"> {{$adverts->links()}} </div>
                </div>
                
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