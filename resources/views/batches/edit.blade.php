@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Edit Batches</h3>
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

            <form action="{{ url('/batches/' . $batches->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $batches->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Course Name</label>
                    <!-- <input type="text" name="course_id" id="course_id" class="form-control" value="{{ $batches->course_id }}" required> -->
                    <select name="course_id" id="course_id" class="form-control" required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" 
                                {{ $course->id == $batches->course_id ? 'selected' : '' }}>{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="text" name="start_date" id="start_date" class="form-control" value="{{ $batches->start_date }}" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
        
    </div>
@endsection