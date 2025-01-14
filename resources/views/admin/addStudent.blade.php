@extends('layouts.userLayout')

@section('title')
Add Student
@endsection

@section('content')
<div class="container m-5">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <h2 class="page-title">Enroll New Student</h2>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('storeStudent') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-2">
                <label>Student Name: </label>
                @error('studentName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentName" placeholder=" Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Registation No: </label>
                @error('studentRegistation')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentRegistation" placeholder=" Registation "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Father's Name: </label>
                @error('studentFatherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentFatherName" placeholder=" Father's Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Mother's Name: </label>
                @error('studentMotherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentMotherName" placeholder=" Mother's Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Phone No: </label>
                @error('studentPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentPhone" placeholder=" Phone "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Address: </label>
                @error('studentAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentAddress" placeholder=" Address "/>
              </div>
              <div class="form-group mt-2">
                <label>Student Department: </label>
                @error('studentDepartment')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="studentDepartment" class="form-control">
                    <option value="">Select</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Animation</option>
                    <option value="3">Web development</option>
                    <option value="4">Android App</option>
                    <option value="5">Basic Course</option>
                    <option value="6">Cyber Security</option>
                </select>

              </div>
              <div class="form-group mt-2">
                <label>Student Image: </label>
                @error('studentImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="studentImage" placeholder=" Image "/>
              </div>
              <div class="text-center">
               <input type="submit" class=" btn btn-primary enter-btn m-3" value="Save" name="studentSubmit"/>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
{{-- <input type="submit" class=" btn btn-primary enter-btn m-3 w-100" value="Save Student" name="studentSubmit"/> --}}
