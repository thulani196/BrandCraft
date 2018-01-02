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
                    <th>Organization</th>
                    <th>Description</th>
                </thead>
            </table>
        </section>
    </div>
</div>
@endsection