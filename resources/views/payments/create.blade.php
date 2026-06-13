@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Add New Payment</h3>
        </div>

        <div class="card-body">
            <a href="{{ url('/payments') }}" class="btn btn-secondary btn-sm" title="Back to Payment List">
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

            <form action="{{ url('/payments') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="enrollment_id" class="form-label">Enrollment id</label>
                    <!-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control" required> -->
                     <select name="enrollment_id" id="enrollment_id" class="form-control" required>
                        @foreach($enrollments as $id => $enroll_no)
                            <option value="{{ $id }}">{{ $enroll_no }}</option>
                        @endforeach
                     </select>
                </div>

                <div class="mb-3">
                    <label for="paid_date" class="form-label">Paid Date</label>
                    <input type="text" name="paid_date" id="paid_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" name="amount" id="amount" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection