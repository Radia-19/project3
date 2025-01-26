@extends('layouts.adminLayout')

@section('title')
Edit Student
@endsection

@section('content')
<div class="">
    <h1 class="page-title">Edit Teacher Information</h1>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ url('update/teacher').$editTeacher->id }}" enctype="multipart/form-data" name="editTeacherForm">
              @csrf
              <div class="form-group">
                <label>Teacher Name: *</label>
                @error('teacherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherName" value="{{ $editTeacher->teacherName }}"/>
              </div>
              <div class="form-group">
                <label>Teacher Registration No: *</label>
                @error('teacherRegistration')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherRegistration" value="{{ $editTeacher->teacherRegistration }}"/>
              </div>
              <div class="form-group">
                <label>Teacher Phone No: *</label>
                @error('teacherPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherPhone" value="{{ $editTeacher->teacherPhone }}"/>
              </div>
              <div class="form-group">
                <label>Teacher E-mail: *</label>
                @error('teacherEmail')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="email" class="form-control" name="teacherEmail" value="{{ $editTeacher->teacherEmail }}"/>
              </div>
              <div class="form-group">
                <label>Teacher Address: *</label>
                @error('teacherAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherAddress" value="{{ $editTeacher->teacherAddress }}"/>
              </div>
              <div class="form-group">
                <label>Teacher Department: *</label>
                @error('teacherDepartment')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="teacherDepartment" class="form-control">
                    <option value="">Select *</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Animation</option>
                    <option value="3">Web development</option>
                    <option value="4">Android App</option>
                    <option value="5">Basic Course</option>
                    <option value="6">Cyber Security</option>
                </select>

              </div>
              <div class="form-group">
                <label>Teacher Image: *</label>
                @error('teacherImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="teacherImage" placeholder=" Image *"/>
                <img src="{{ asset($editTeacher->teacherImage ) }}" alt="img" width="200px;" class="mt-3">
                <input type="hidden" name="oldImage" value="{{ $editTeacher->teacherImage  }}">
              </div>


                <input type="submit" class=" btn btn-primary enter-btn" value="Update Teacher" name="teacherUpdate"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.forms['editTeacherForm'].elements['teacherDepartment'].value = {{ $editTeacher->teacherDepartment }}
  </script>

@endsection
