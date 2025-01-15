@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <h3>Payment</h3>
            <hr>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            {{-- <table class="table table-info table-hover table-bordered text-dark">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Registration</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @forelse($pendingstudents as $student)
                  <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->registration }}</td>
                    <td>{{{ date('Y-m-d',strtotime($student->created_at)) }}}</td>
                    <td>
                        <a class="btn btn-outline-success" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$student->id,'approved']) }}">Approve</a>
                        <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$student->id,'declined']) }}">Decline</a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td class="text-center" colspan="5">No Data Found!</td>
                  </tr>
                @endforelse
                </tbody>
            </table>
              {{ $pendingstudents->links() }} --}}
              {{-- <h3>{{ $data->studentName }}</h3>
              <p>Payment Method: {{ $data->payment->payment_method }}</p>
              <p>Payment Status: {{ $data->payment->status }}</p>
              <p>Amount Paid: ${{ $data->payment->amount }}</p>
              <p>Paid At: {{ $data->payment->paid_at }}</p> --}}
              <h3>Student name</h3>
              <p>Payment Method:</p>
              <p>Payment Status:</p>
              <p>Amount Paid:</p>
              <p>Paid At:</p>

        </div>
    </div>
</div>

@endsection
