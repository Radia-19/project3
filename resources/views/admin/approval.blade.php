@extends('layouts.adminLayout')

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <h3>Approval</h3>
            <hr>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <table class="table table-info table-hover table-bordered text-dark">
                <thead>
                  <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book</th>
                    <th scope="col">User</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @forelse($pendingbooks as $book)
                  <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td><img src="{{ asset('uploads').'/'.$book->book }}" style="height: 150px; width: 150px;"></td>
                    <td>{{ $book->user->username }}</td>
                    <td>{{{ date('Y-m-d',strtotime($book->created_at)) }}}</td>
                    <td>
                        <a class="btn btn-outline-success" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$book->id,'approved']) }}">Approve</a>
                        <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$book->id,'declined']) }}">Decline</a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td class="text-center" colspan="5">No Data Found!</td>
                  </tr>
                @endforelse
                </tbody>
              </table>
              {{ $pendingbooks->links() }}
        </div>
    </div>


@endsection
