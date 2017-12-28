@extends('layouts.app')
@section('content')
<div class="container"><br><br>
    <h3 class="red-text text-darken-4 center-align">Service Requests</h3>
    <div class="row">
        <div class="col l12 m12 s12">
            <section>
                @if(count($requests) > 0)
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
                        @foreach($requests as $request)
                            <tr>
                                <td>{{ $request->customer_name }}</td>
                                <td>{{ $request->phone_number }}</td>
                                <td>{{ $request->organization }}</td>
                                <td>{{ $request->org_phone }}</td>
                                <td>{{ $request->service }}</td>
                                <td>{{ $request->date }}</td>
                                <td class="center-align">
                                    <a href=""><i class="fa fa-archive" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </section>
        </div>
    </div>
</div>
@endsection