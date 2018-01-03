@extends('layouts.app')

@section('content')
<div class="container"><br><br>
    <h3 class="center-align red-text text-darken-4">Manage Adverts</h3>
    <div class="row">
        <a href="adverts/create" class="white-text red darken-4 btn right">Add Adverts</a>
        <section class="center-align">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Options</th>
                </thead>
                <tbody>
                        @if(count($adverts) > 0)
                            @foreach($adverts as $advert)
                                <tr>
                                    <td>1</td>
                                    <td><img src="/storage/cover_images/{{$advert->image }}" width="60px" height="25px"></td>
                                    <td>{{ $advert->organization }}</td>
                                    <td>{{ $advert->description }}</td>
                                    <td class="center-align">
                                        <a href=""><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
            </table>
            
        </section>
    </div>
</div>
@endsection