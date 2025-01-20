@extends('layouts.adminLayout')

@section('title')
View Trainer
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
          <a href="{{ route('allTeacher') }}" class="btn btn-info mb-4"><i class=""></i>Back</a>
        <h2 class="card-title">Trainers Information</h2>
        <table data-toggle="table" class="table-bordered table table-striped">
            <thead>

            </thead>

             <tbody>
                 <tr>
                     <img src="{{ asset($viewTeacher->teacherImage) }}" alt="img" width="200px" class="mb-4 mt-4">
                 </tr>
                <tr>
                    <th>Name :</th>
                    <td>{{ $viewTeacher->teacherName }}</td>
                </tr>
                <tr>
                    <th>Registation</th>
                    <td>{{ $viewTeacher->teacherRegistration }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $viewTeacher->teacherPhone }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $viewTeacher->teacherEmail }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $viewTeacher->teacherAddress }}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>
                        @if($viewTeacher->teacherDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($viewTeacher->teacherDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($viewTeacher->teacherDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($viewTeacher->teacherDepartment==4)
                        <span>{{ 'Digital Marketing' }}</span>
                        @elseif($viewTeacher->teacherDepartment==5)
                        <span>{{ 'Basic Course' }}</span>
                        @elseif($viewTeacher->teacherDepartment==6)
                        <span>{{ 'Cyber Security' }}</span>
                        @else
                        <span>{{ 'Not Defined' }}</span>
                        @endif
                    </td>
                </tr>
             </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
