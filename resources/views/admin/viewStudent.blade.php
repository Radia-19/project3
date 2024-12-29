@extends('layouts.adminLayout')

@section('title')
View Student
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
          <a href="{{ route('allStudents') }}" class="btn btn-info mb-4"><i class=""></i>Back</a>
        <h2 class="card-title">Student Information</h2>
        <table data-toggle="table" class="table-bordered table table-striped">
            <thead>

            </thead>

             <tbody>
                 <tr>
                     <img src="{{ asset($viewStudent->studentImage) }}" alt="img" width="200px" class="mb-4 mt-4">
                 </tr>
                <tr>
                    <th>Name :</th>
                    <td>{{ $viewStudent->studentName }}</td>
                </tr>
                <tr>
                    <th>Registation</th>
                    <td>{{ $viewStudent->studentRegistation }}</td>
                </tr>
                <tr>
                    <th>Father's Name</th>
                    <td>{{ $viewStudent->studentFatherName }}</td>
                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <td>{{ $viewStudent->studentMotherName }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $viewStudent->studentPhone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $viewStudent->studentAddress }}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>
                        @if($viewStudent->studentDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($viewStudent->studentDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($viewStudent->studentDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($viewStudent->studentDepartment==4)
                        <span>{{ 'Android App' }}</span>
                        @elseif($viewStudent->studentDepartment==5)
                        <span>{{ 'Basic Course' }}</span>
                        @elseif($viewStudent->studentDepartment==6)
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
