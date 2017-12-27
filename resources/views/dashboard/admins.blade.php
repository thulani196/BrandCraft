@extends('layouts.app')

@section('content')
<div class="container"><br><br>
    <div class="row">
        <div class="col l6 m12 s12">
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
        <div class="col l6 m12 s12">
            <section>
                <div class="row">
                    <h5 class="center-align red-text text-darken-4">Register new admin</h5>
                    <form class="form" method="POST" action="">
                        
                        <div class="col l6 m6 s12 input-field">
                            <input type="text" name="fullname" class="validate">
                            <label for="full_name">Full Name:</label>
                        </div>
                        <div class="col l6 m6 s12 input-field">
                                <input type="email" name="email" class="validate">
                                <label for="email" data-error="wrong email format">Email Address:</label>
                        </div>

                        <div class="col l6 m12 s12 input-field">
                                <input type="password" name="password" class="validate">
                                <label for="password">Password:</label>
                        </div>

                        <div class="col l6 m12 s12 input-field">
                                <input type="password" name="c_pwd" class="validate">
                                <label for="c_pwd">Confirm Password:</label>
                        </div>

                        <div class="col l12 m12 s12 ">
                                <button class="btn waves-effect red darken-4 waves-light right" type="submit" name="action">Submit
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                      </button>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection