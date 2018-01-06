@extends('layouts.app')
@section('content')
<div class="container"><br><br>
    <h3 class="center-align red-text text-darken-4">Add an Advert</h3>
    <div class="row">
        <section class="center-align">
            <form method="POST" action="/home/adverts"  enctype="multipart/form-data" class="form">
                {{ csrf_field() }}
                <div class="input-field col s6">
                    <input id="product_name" Name="product_name" type="text" class="validate">
                    <label for="product_name">Product Name</label>
                </div>

                <div class="input-field col s6">
                        <div class="file-field input-field">
                            <div class="btn red darken-4">
                                <span>File</span>
                                <input type="file" name="cover_photo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" placeholder="Upload an image" type="text">
                            </div>
                </div>
                </div>

                <div class="input-field col s12">
                    <textarea id="textarea1" name="details" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>
                <div class="">
                    <input type="submit" class="btn green darken-4" value="Submit Ad">
                </div>
            </form>
            
        </section>
    </div>
</div>
@endsection