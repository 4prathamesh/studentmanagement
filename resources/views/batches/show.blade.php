@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Batch Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/batches') }}" class="btn btn-secondary btn-sm" title="Back to Course List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $batches->name }}</td>
                </tr>
                <tr>
                    <th>Course Name</th>
                    <td>{{ $batches->course->name }}</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>{{ $batches->start_date }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection