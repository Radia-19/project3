@extends('layouts.adminLayout')

@section('title')
Andriod Department
@endsection

@section('content')
<h1 class="page-title">Department of Android</h1>
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
                <th>Department</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($appStudents as $appStudent)
                <tr>
                    <td>{{ $appStudent->studentName }}</td>
                    <td>{{ $appStudent->studentRegistration}}</td>
                    <td>{{ $appStudent->studentPhone}}</td>
                    <td>
                        @if($appStudent->studentDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($appStudent->studentDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($appStudent->studentDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($appStudent->studentDepartment==4)
                        <span>{{ 'Android App' }}</span>
                        @elseif($appStudent->studentDepartment==5)
                        <span>{{ 'Basic Course' }}</span>
                        @elseif($animeStudent->studentDepartment==6)
                        <span>{{ 'Cyber Security' }}</span>
                        @else
                        <span>{{ 'Not Defined' }}</span>
                        @endif
                    </td>
                    <td><img src="{{ asset($appStudent->studentImage) }}" alt="img" width="50px"></td>
                    <td>
                    <a href="{{ url('view/student').$appStudent->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/student').$appStudent->id }}" class="btn btn-warning"> Edit</a>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Delete</a>
                    </td>
                </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
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
          <a href="{{ url('delete/student').$appStudent->id }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
@endsection
