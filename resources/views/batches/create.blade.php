@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Add New Batches</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/batches') }}" class="btn btn-secondary btn-sm" title="Back to Batch List">
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

            <form action="{{ url('/batches') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Batch Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Course</label>
                    <!-- <input type="text" name="course_id" id="course_id" class="form-control" required> -->
                    <select name="course_id" id="course_id" class="form-control" required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }} ">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="text" name="start_date" id="start_date" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection