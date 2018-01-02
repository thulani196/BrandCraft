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
                        <tr>
                            <td>Thulani Tembo</td>
                            <td>tembothulani96@outlook.com</td>
                            <td>Superuser</td>
                            <td class="center-align">
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>John Smith</td>
                            <td>jsmith@outlook.com</td>
                            <td>admin</td>
                            <td class="center-align">
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        <tr>
                                <td>John Smith</td>
                                <td>jsmith@outlook.com</td>
                                <td>user</td>
                                <td class="center-align">
                                    <a href=""><i class="fa fa-edit"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>

                            <tr>
                                    <td>John Smith</td>
                                    <td>jsmith@outlook.com</td>
                                    <td>Superuser</td>
                                    <td class="center-align">
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

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