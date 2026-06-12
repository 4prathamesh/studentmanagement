@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Student List</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add new Student">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br>
            <br>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>{{ $student->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ url('/student/' .$student->id) }}" title="view Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/student/' .$student->id. '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                            <form action="{{ url('/student/' .$student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Are you sure you want to delete this student?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No Students Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection