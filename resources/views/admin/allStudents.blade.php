@extends('layouts.adminLayout')

@section('title')
All Student
@endsection


@section('content')
<h1 class="page-title">All Student's</h1>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <table id="order-listing" class="table table-striped"  style="width:100%;">
          <thead>
            <tr>
                <th>Name</th>
                <th>Registation</th>
                {{-- <th>Phone</th> --}}
                <th>Course</th>
                <th>Image</th>
                <th>Batch</th>
                <th>Actions</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
           @forelse ($allStudents as $student)
                <tr>
                    <td>{{ $student->studentName }}</td>
                    <td>{{ $student->studentRegistation}}</td>
                    <td>
                        <span>{{ $student->course_name ?? 'No Course Assigned' }}</span>
                    </td>
                    <td><img src="{{ asset($student->studentImage) }}" alt="img" width="50px"></td>
                    <td>{{ $student->batch }}</td>
                    <td>
                    <a href="{{ url('view/student').$student->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/student').$student->id }}" class="btn btn-warning"> Edit</a>
                    <a href="{{ url('delete/student').$student->id }}" onclick="return confirm('Are You Sure to Delete This')" class="btn btn-danger"> Delete</a>
                    </td>
                    <td>
                    <a class="btn btn-outline-success" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$student->id,'approved']) }}">Approve</a>
                    <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{ route('admin.approval.update',[$student->id,'declined']) }}">Decline</a>
                    </td>
                </tr>
                @empty
                  <tr>
                    <td class="text-center" colspan="7">No Data Found!</td>
                  </tr>
           @endforelse
          </tbody>
        </table>
        {{ $allStudents->links() }}
      </div>
    </div>
  </div>
</div>

@endsection
