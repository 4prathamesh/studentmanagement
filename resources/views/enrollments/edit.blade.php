@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Edit Enrollment</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/enrollments') }}" class="btn btn-secondary btn-sm" title="Back to Enrollment List">
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

            <form action="{{ url('/enrollments/' . $enrollments->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="enroll_no" class="form-label">Enroll No</label>
                    <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{ $enrollments->enroll_no }}" required>
                </div>

                <div class="mb-3">
                    <label for="batch_id" class="form-label">Batch</label>
                    <!-- <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{ $enrollments->batch_id }}" required> -->
                     <select name="batch_id" id="batch_id" class="form-control" required>
                        @foreach($batches as $batch)
                            <option value="{{ $batch->id }}" {{ $batch->id == $enrollments->batch_id ? 'selected' : ''}}>{{ $batch->name}}
                            </option>
                        @endforeach
                     </select>
                </div>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student</label>
                    <!-- <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $enrollments->student_id }}" required> -->
                    <select name="student_id" id="student_id" class="form-control" required>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ $student->id == $enrollments->student_id ? 'selected' : ''}}>{{ $student->name}}
                            </option>
                        @endforeach
                     </select>
                </div>

                <div class="mb-3">
                    <label for="join_date" class="form-label">Join Date</label>
                    <input type="text" name="join_date" id="join_date" class="form-control" value="{{ $enrollments->join_date }}" required>
                </div>

                <div class="mb-3">
                    <label for="fee" class="form-label">Fee</label>
                    <input type="text" name="fee" id="fee" class="form-control" value="{{ $enrollments->fee }}" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
        
    </div>
@endsection