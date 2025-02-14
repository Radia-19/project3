@extends('layouts.userLayout')

@section('title','Course')

@push('css')

@endpush

@section('content')

<section class="department">
	<div class="text-center mt-5 mb-3">
        <h6 class="section-title bg-white text-start text-primary pe-3 mb-2">কোর্স ডিটেইলস</h6>
                        <h4 class="mb-4">আপনার পছন্দের কোর্সটি বেছে নিন আর দক্ষতা অর্জন করে হয়ে উঠুন স্বাবলম্বী।</h4>
    </div>
	<div class="container">
             <div class="row">
                    <div  class="col-lg-12 col-md-12 col-sm-12">
                        @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        <div class="row">
                            {{ $allCourses->links() }}
                            @foreach($allCourses as $course)
                                   <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                                <div class="card m-2" style="width: 18rem; border-radius: 15px;">
                                                    <a href="{{ route('course.details', $course->id) }}" style="text-decoration: none">
                                                        <img src="{{ asset($course->image) }}" class="card-img-top rounded-top-3" alt="{{ $course->name }}">
                                                    <div class="card-body">
                                                      <h5 class="card-title text-black">{{ $course->name }}</h5>
                                                      <p class="card-text text-secondary mb-2">{{ $course->details }}</p>
                                                      @if(Auth::check() && Auth::user()->role === 'user')
                                                      <p class="text-success text-end me-3">&#2547;{{ $course->fee }} BDT</p>
                                                      @endif
                                                      <p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p>

                                                    </div>
                                                    <div class="card-footer p-5 pt-0 border-top-0 bg-transparent">
                                                        @if(Auth::check() && Auth::user()->role === 'trainer')
                                                            Course ID: {{ $course->id }}
                                                            <a class="text-info ms-2 me-2" href="{{ route('updatecourse.show',[$course->id]) }}">Edit</a>
                                                            <a class="text-danger " onclick="return confirm('Are you sure?')" href="{{ route('course.delete',[$course->id]) }}">Delete</a>
                                                        @endif
                                                    </div>
                                                    </a>
                                                </div>
                                    </div>
                            @endforeach


                            </div>
                      </div>
                 </div>
    </div>

</section>


@endsection

@push('js')

@endpush

{{-- টাকা --}}
