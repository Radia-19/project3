@extends('layouts.adminLayout')

@section('title')
All allTeacher
@endsection


@section('content')
<h1 class="page-title">All Teacher's</h1>
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
           @foreach ($allTeachers as $teacher)
                <tr>
                    <td>{{ $teacher->teacherName}}</td>
                    <td>{{ $teacher->teacherRegistation}}</td>
                    <td>{{ $teacher->teacherPhone}}</td>
                    <td>
                        @if($teacher->teacherDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($teacher->teacherDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($teacher->teacherDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($teacher->teacherDepartment==4)
                        <span>{{ 'Android App' }}</span>
                        @elseif($teacher->teacherDepartment==5)
                        <span>{{ 'Basic Course' }}</span>
                        @elseif($teacher->teacherDepartment==6)
                        <span>{{ 'Cyber Security' }}</span>
                        @else
                        <span>{{ 'Not Defined' }}</span>
                        @endif
                    </td>
                    <td><img src="{{ asset($teacher->teacherImage) }}" alt="img" width="50px"></td>
                    <td>
                    <a href="{{ url('view/teacher').$teacher->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/teacher').$teacher->id }}" class="btn btn-warning"> Edit</a>
                    <a href="{{ url('delete/teacher').$teacher->id }}" onclick="return confirm('Are You Sure to Delete This')" class="btn btn-danger"> Delete</a>
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
