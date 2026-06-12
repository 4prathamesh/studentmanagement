@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Student Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/student') }}" class="btn btn-secondary btn-sm" title="Back to Student List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $students->name }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $students->address }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $students->mobile }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection