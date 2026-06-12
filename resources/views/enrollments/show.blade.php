@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Enrollment Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/enrollments') }}" class="btn btn-secondary btn-sm" title="Back to Enrollment List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Enroll No</th>
                    <td>{{ $enrollment->enroll_no }}</td>
                </tr>
                <tr>
                    <th>Batch</th>
                    <td>{{ $enrollment->batch->name }}</td>
                </tr>
                <tr>
                    <th>Student Name</th>
                    <td>{{ $enrollment->student->name }}</td>
                </tr>
                <tr>
                    <th>Join Date</th>
                    <td>{{ $enrollment->join_date }}</td>
                </tr>
                <tr>
                    <th>Fee</th>
                    <td>{{ $enrollment->fee }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection