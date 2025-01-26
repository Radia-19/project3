@extends('layouts.adminLayout')

@section('title')
Edit Student
@endsection

@section('content')
<div class="">
    <h1 class="page-title">Edit Student Information</h1>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ url('update/student').$editStudent->id }}" name="editStudentForm" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Student Name: *</label>
                @error('studentName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentName" value="{{ $editStudent->studentName }}"/>
              </div>
              <div class="form-group">
                <label>Student Registration No: *</label>
                @error('studentRegistration')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentRegistration" value="{{ $editStudent->studentRegistration }}"/>
              </div>
              <div class="form-group">
                <label>Student Father's Name: *</label>
                @error('studentFatherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentFatherName" value="{{ $editStudent->studentFatherName }}"/>
              </div>
              <div class="form-group">
                <label>Student Mother's Name: *</label>
                @error('studentMotherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentMotherName" value="{{ $editStudent->studentMotherName }}"/>
              </div>
              <div class="form-group">
                <label>Student Phone No: *</label>
                @error('studentPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentPhone" value="{{ $editStudent->studentPhone }}"/>
              </div>
              <div class="form-group">
                <label>Student Address: *</label>
                @error('studentAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentAddress" value="{{ $editStudent->studentAddress }}"/>
              </div>
              <div class="form-group">
                <label for="course_id">Select Course</label>
                <select name="course_id" id="course_id" class="form-control" required>
                    <option value="" disabled selected>Select a course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }} (Fee: {{ $course->fee }})</option>
                    @endforeach
                </select>
            </div>

              {{-- <div class="form-group">
                <label>Student Department: *</label>
                @error('studentDepartment')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="studentDepartment" class="form-control">
                <option value="">Select *</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Animation</option>
                    <option value="3">Web development</option>
                    <option value="4">Android App</option>
                    <option value="5">Basic Course</option>
                    <option value="6">Cyber Security</option>
                </select>

              </div> --}}
              <div class="form-group">
                <label>Student Image: *</label>
                @error('studentImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="studentImage">
                <img src="{{ asset($editStudent->studentImage ) }}" alt="img" width="200px;" class="mt-3">
                <input type="hidden" name="oldImage" value="{{ $editStudent->studentImage  }}">
              </div>
                <input type="submit" class=" btn btn-primary enter-btn" value="Update Student" name="updateStudent"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <script>
    document.forms['editStudentForm'].elements['studentDepartment'].value = {{ $editStudent->studentDepartment }}
  </script> --}}

@endsection
