@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Enrollment List</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add new Enrollment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br>
            <br>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->id }}</td>
                        <td>{{ $enrollment->enroll_no }}</td>
                        <td>{{ $enrollment->batch->name }}</td>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->join_date->format('d-m-Y') }}</td>
                        <td>{{ $enrollment->fee }}</td>
                        <td>
                            <a href="{{ url('/enrollments/' .$enrollment->id) }}" title="view Enrollment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/enrollments/' .$enrollment->id. '/edit') }}" title="Edit Enrollment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                            <form action="{{ url('/enrollments/' .$enrollment->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm('Are you sure you want to delete this enrollment?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No Enrollments Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection