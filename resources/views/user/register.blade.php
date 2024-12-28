@extends('layouts.userLayout')

@section('title','Register')

@push('css')

@endpush


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-4 offset-4">
                @include('errors.error')
                <div class="mt-5" style="text-align: center;">
                    <img style="height: 60px;"  src="{{ asset('image/0fKpIQ-LogoMakr.png')}}"  alt="Example Image">
                   </div>
                <h3 class="mt-2 mb-2 text-center">Join Here!</h3>
                <form action="{{ route('register') }}" class="form-group" method="POST">
                    @csrf
                    <lable for="">Username:</lable>
                    <input type="text" class="form-control mb-2" name="username">
                    <lable for="">Email:</lable>
                    <input type="email" class="form-control mb-2" name="email">
                    <lable for="">Password:</lable>
                    <input type="password" class="form-control mb-2" name="password">
                    <lable for="">Confirm Password:</lable>
                    <input type="password" class="form-control mb-2" name="password_confirmation">
                    <div class="text-center">
                    <input type="submit" name="submit" value="register" class="mt-2 mb-2 btn btn-info w-100">
                    </div>
                    <div class="text-center">
                        <p>Already Have An Account? <a class="text-info" href="{{ url('/login') }}">Login Here</a></p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light d-flex align-items-center justify-content-center border rounded shadow-sm w-100" style="padding: 10px 20px;">
                            <img class="me-2" style="height: 25px;" src="{{ asset('image/icons8-google-48.png') }}" alt="Google Icon">
                            <span>Continue with Google</span>
                        </button>
                    </div>
                    {{-- <div class="d-flex justify-content-center mt-4">
                        <button type="submit"
                                class="btn btn-light d-flex align-items-center justify-content-center border shadow-sm"
                                style="padding: 10px 20px; border-radius: 25px; width: fit-content;">
                            <img class="me-2" style="height: 25px;" src="{{ asset('image/icons8-google-48.png') }}" alt="Google Icon">
                            <span>Continue with Google</span>
                        </button>
                    </div> --}}



                </form>
            </div>
        </div>

    </div>
@endsection

@push('js')

@endpush
