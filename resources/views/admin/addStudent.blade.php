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

    <h2 class="page-title text-center text-info mb-2"><i class="bi bi-backpack-fill"></i> Enroll New Student Here!</h2>
    <div class="row mb-2">
      <div class="col-lg-8 offset-2">
        <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('storeStudent') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group mt-2">
                <label>Name: </label>
                @error('studentName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentName" placeholder=" Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Registration No: </label>
                @error('studentRegistration')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentRegistration" placeholder=" Registration "/>
              </div>
              <div class="form-group mt-2">
                <label>Father's Name: </label>
                @error('studentFatherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentFatherName" placeholder=" Father's Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Mother's Name: </label>
                @error('studentMotherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentMotherName" placeholder=" Mother's Name "/>
              </div>
              <div class="form-group mt-2">
                <label>Phone No: </label>
                @error('studentPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentPhone" placeholder=" Phone "/>
              </div>
              <div class="form-group mt-2">
                <label>Address: </label>
                @error('studentAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentAddress" placeholder=" Address "/>
              </div>

              <div class="form-group mt-2">
                <label for="course_id">Select Course</label>
                @error('course_id')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="course_id" id="course_id" class="form-control" required>
                    <option value="" disabled selected>Select a course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->name }} (Fee: {{ $course->fee }} BDT)</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group mt-2">
                <label>Image: </label>
                @error('studentImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="studentImage" placeholder=" Image "/>
              </div>
              {{-- <div class="form-group mt-2">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control" required>
                    @foreach($payments as $payment)
                        <option value="{{ $payment->payment_method }}">{{ $payment->payment_method }}</option>
                    @endforeach
                </select>
             </div> --}}

              <div class="text-center mt-2">
               <input type="submit" class=" btn btn-primary enter-btn m-3" value="Enroll Student" name="studentSubmit"/>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('js')

@endpush


{{-- <div class="form-group mt-2">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control" required>
                    <option value="card" {{ old('payment_method') == 'card' ? 'selected' : '' }}>Credit/Debit Card</option>
                    <option value="bank" {{ old('payment_method') == 'bank' ? 'selected' : '' }}>Bank Transfer</option>
                    <option value="cash" {{ old('payment_method') == 'cash' ? 'selected' : '' }}>Cash</option>
                    <option value="paypal" {{ old('payment_method') == 'paypal' ? 'selected' : '' }}>Bkash/Nagad/Rocket</option>
                </select>
              </div> --}}

{{-- <option value="card">Credit/Debit Card</option>
                    <option value="bank">Bank Transfer</option>
                    <option value="cash">Cash</option>
                    <option value="mobile">Bkash/Nagad/Rocket</option> --}}
