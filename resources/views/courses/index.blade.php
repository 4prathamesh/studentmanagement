@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Course List</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add new Course">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br>
            <br>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->syllabus }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ url('/courses/' .$course->id) }}" title="view Course"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/courses/' .$course->id. '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                            <form action="{{ url('/courses/' .$course->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm('Are you sure you want to delete this course?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No Courses Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection