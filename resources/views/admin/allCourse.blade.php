@extends('layouts.adminLayout')

@section('title')
All Courses
@endsection

@section('content')
<h1 class="page-title">Creative Section</h1>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <table id="order-listing" class="table table-striped"  style="width:100%;">
          <thead>
            <tr>
                <th>Name</th>
                <th>Registration</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($allStudents as $student)
                <tr>
                    <td>{{ $student->studentName }}</td>
                    <td>{{ $student->studentRegistration }}</td>
                    <td>{{ $student->studentPhone }}</td>
                    <td>{{ $student->course->name }}</td>
                    <td><img src="{{ asset($student->studentImage) }}" alt="img" width="50px"></td>
                    <td>
                    <a href="{{ url('view/student').$student->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/student').$student->id }}" class="btn btn-warning"> Edit</a>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Delete</a>
                    </td>
                </tr>
           @endforeach
          </tbody>
        </table>
    {{ $allStudents->links() }}
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
@foreach ($allStudents as $student)
<div class="modal fade" id="deleteModal-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this student?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete/student/'.$student->id) }}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
</div>
@endforeach

{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure delete this data !
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete/student').$allCourse->id }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
