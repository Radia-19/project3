@extends('layouts.userLayout')

@section('title','Login')

@push('css')

@endpush


@section('content')
   <div class="container">

       <div class="row">
           <div class="col-4 offset-4">
               @include('errors.error')
               <div class="mt-5" style="text-align: center;">
                <img style="height: 70px;"  src="{{ asset('image/0fKpIQ-LogoMakr.png')}}"  alt="Example Image">
               </div>
               <h3 class="mt-3 mb-3 text-center">Login Here!</h3>
               <form  action="{{ route('login') }}" class="form-group" method="POST">
                   @csrf
                   <label for="">Username:</label>
                   <input type="text" class="form-control mt-2 mb-3" name="username">
                   <lable for="">Password:</lable>
                   <input type="password" class="form-control mb-3" name="password">
                   <label class="form-label mb-1">User Type:</label>
                    <select class="form-select rounded-0 mb-4" name="role"  required>
                             <option class="fw-bold" selected value="user">User</option>
                             <option class="fw-bold" value="trainer">Trainer</option>
                    </select>
                    <div class="remember-forgot">
                    <label><input type="checkbox" class="check me-2">Remember me</label>
                    </div>

                   <div class="text-center">
                   <input type="submit" name="submit" value="login" class="mt-3 mb-3 btn btn-primary w-100">
                   </div>
                   <div class="text-center">
                    <p class="mt-1 ">New Here? <a href="{{ url('/register') }}">Join Now</a></p>

                    <div class="text-center">
                        <button type="submit" class="btn btn-light d-flex align-items-center justify-content-center border rounded shadow-sm w-100" style="padding: 10px 20px;">
                            <img class="me-2" style="height: 25px;" src="{{ asset('image/icons8-google-48.png') }}" alt="Google Icon">
                            <span>Continue with Google</span>
                        </button>
                    </div>

                    <p class="text-white mb-2">nothing</p>
                </div>
               </form>
           </div>
       </div>

   </div>
@endsection

@push('js')

@endpush

