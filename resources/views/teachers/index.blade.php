@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Teacher List</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add new Teacher">
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

                    @forelse($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>{{ $teacher->mobile }}</td>
                        <td>{{ $teacher->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ url('/teachers/' .$teacher->id) }}" title="view Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/teachers/' .$teacher->id. '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                            <form action="{{ url('/teachers/' .$teacher->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm('Are you sure you want to delete this teacher?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No Teachers Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection