@extends('layouts.app')
@section('content')
<div class="container"><br><br>
    <h3 class="red-text text-darken-4 center-align">Service Requests</h3>
    <div class="row">
        <div class="col l12 m12 s12">
            <section>
                <table class="striped bordered responsive-table">
                    <thead class="red darken-4 white-text">
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th>Company</th>
                        <th>Co. Number</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thulani Tembo</td>
                            <td>0976245430</td>
                            <td>Hypa-Tech I/O</td>
                            <td>0211293435</td>
                            <td>Branding</td>
                            <td>01-01-2018</td>
                            <td class="center-align">
                                <a href=""><i class="fa fa-archive" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
@endsection