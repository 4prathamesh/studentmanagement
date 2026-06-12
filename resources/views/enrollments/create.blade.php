@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Add New Enroll</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/enrollments') }}" class="btn btn-secondary btn-sm" title="Back to Enroll List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/enrollments') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="enroll_no" class="form-label">Enroll No</label>
                    <input type="text" name="enroll_no" id="enroll_no" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="batch_id" class="form-label">Batch</label>
                    <input type="text" name="batch_id" id="batch_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student Name</label>
                    <input type="text" name="student_id" id="student_id" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="join_date" class="form-label">Join Date</label>
                    <input type="text" name="join_date" id="join_date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="fee" class="form-label">Fee</label>
                    <input type="text" name="fee" id="fee" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection