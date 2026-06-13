@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Payment Details</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/payments') }}" class="btn btn-secondary btn-sm" title="Back to Payment List">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
            <br>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Enrollment Id</th>
                    <td>{{ $payments->enrollment->enroll_no }}</td>
                </tr>
                <tr>
                    <th>Paid Date</th>
                    <td>{{ $payments->paid_date }}</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>{{ $payments->amount }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection