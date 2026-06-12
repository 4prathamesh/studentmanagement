@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Course Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/courses') }}" class="btn btn-secondary btn-sm" title="Back to Course List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $courses->name }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $courses->syllabus }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $courses->duration }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection