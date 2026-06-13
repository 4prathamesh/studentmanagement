@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Payment List</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add new Payment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br>
            <br>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Enrollment id</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->enrollment->enroll_no }}</td>
                        <td>{{ $payment->paid_date }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ url('/payments/' .$payment->id) }}" title="view Payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/payments/' .$payment->id. '/edit') }}" title="Edit Payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                            <form action="{{ url('/payments/' .$payment->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Are you sure you want to delete this payment?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No Payments Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection