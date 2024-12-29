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
                <th>Phone</th>
                <th>Department</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($allStudents as $student)
                <tr>
                    <td>{{ $student->studentName }}</td>
                    <td>{{ $student->studentRegistation}}</td>
                    <td>{{ $student->studentPhone}}</td>
                    <td>
                        @if($student->studentDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($student->studentDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($student->studentDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($student->studentDepartment==4)
                        <span>{{ 'Android App' }}</span>
                        @elseif($student->studentDepartment==5)
                        <span>{{ 'Basic Course' }}</span>
                        @elseif($student->studentDepartment==6)
                        <span>{{ 'Cyber Security' }}</span>
                        @else
                        <span>{{ 'Not Defined' }}</span>
                        @endif
                    </td>
                    <td><img src="{{ asset($student->studentImage) }}" alt="img" width="50px"></td>
                    <td>
                    <a href="{{ url('view/student').$student->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/student').$student->id }}" class="btn btn-warning"> Edit</a>
                    <a href="{{ url('delete/student').$student->id }}" onclick="return confirm('Are You Sure to Delete This')" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
