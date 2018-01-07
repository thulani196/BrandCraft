@extends('layouts.app')
@section('content')
<div class="container"><br><br>
    <div class="row">
        <div class="col l8 m12 s12">
            <section>
                <table class="striped bordered ">
                    <thead class="red darken-4 white-text">
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                           
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->role == 1)
                                        superuser
                                    @elseif($user->role == 2)
                                        admin
                                    @elseif($user->role ==3)
                                        user
                                    @endif
                                </td>
                                <td class="center-align">
                                    <a href="admins/{{$user->id}}/edit"><i class="fa fa-edit"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            
                        @endforeach
                    @endif
                       

                    </tbody>
                </table>
            </section>
        </div>
        <div class="col l4 m12 s12">
           <a href="admins/create" class="btn green darken-3">Register a new Admin</a>
            </section>
        </div>
    </div>
</div>
@endsection