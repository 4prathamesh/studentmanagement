@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Teacher Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/teachers') }}" class="btn btn-secondary btn-sm" title="Back to Teacher List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $teachers->name }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $teachers->address }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $teachers->mobile }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection