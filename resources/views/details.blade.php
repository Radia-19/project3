@extends('layouts.userLayout')

@section('title', $course->name . ' Details')

@push('css')

@endpush

@section('content')

<section>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        {{-- <video src="{{ asset('video/basic.mp4') }}" width="600" height="380" style="object-fit: cover;" autoplay muted loop controls></video> --}}
                        <!-- Video Section -->
                    @if($course->video)
                        <video src="{{ asset($course->video) }}" width="600" height="380" style="object-fit: cover;" autoplay muted loop controls></video>
                    @else
                        <img class="img-fluid" src="{{ asset($course->image) }}" alt="{{ $course->name }}">
                    @endif
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4">{{ $course->name }}</h1>
                    <p class="mb-4">{{ $course->details }}</p>
                    <hr>
                    <p class="mb-4">আমাদের ওয়েব ডিজাইন কোর্সের মাধ্যমে আপনার লক্ষ্য অর্জন করুন এবং নিজেকে শক্তিশালী করুন</p>
                    <p class="mb-4">আমরা প্রতিভাবান প্রশিক্ষকদের সাথে সেরা মডিউল অফার করি</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>বেসিক থেকে অ্যাডভান্সড লেভেল</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>অনলাইন ক্লাস</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ক্লাস রেকর্ডিং এ লাইফটাইম এক্সেস</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>দক্ষ প্রশিক্ষক</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>সহজ ভর্তি</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>প্রফেশনাল সার্টিফিকেট</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('addStudent') }}" id="actionButton">এখনই ভর্তি হোন</a>
                </div>
                <div>
                    <h6 class="section-title bg-white text-start text-primary pe-3">ওয়েব ডিজাইন কি? কিভাবে শিখবেন এবং কত দিন সময় লাগবে?</h6>
                    <div class="row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">ব্যাচ শুরু</h5>
                              <p class="card-text">{{ \Carbon\Carbon::parse($course->batch_start)->format('d M, Y') }}</p>
                              <h5 class="card-title">ভর্তি শেষ</h5>
                              <p class="card-text">{{ \Carbon\Carbon::parse($course->admission_end)->format('d M, Y') }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">লাইভ ক্লাস</h5>
                              <p class="card-text"><i class="bi bi-border-style"></i> {{ $course->live_class_time }}</p>
                              <h5 class="card-title">ভর্তি চলছে</h5>
                              <p class="card-text"><i class="bi bi-border-style"></i> ১ম ব্যাচে</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">কতগুলো ক্লাস</h5>
                                <p class="card-text"><i class="bi bi-border-style"></i> {{ $course->live_classes }} টি  লাইভ ক্লাস</p>
                                <p><i class="bi bi-boxes"></i> {{ $course->projects }} টি প্রজেক্টসহ</p>
                              </div>
                            </div>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-12 g-0">
                            <div class="card m-3">
                                <h5 class="card-header">Topics</h5>
                                <div class="card-body">
                                  <ul>
                                    <li>Introduction To HTML, CSS & Integration With HTML<i class="bi bi-filetype-html"></i></li>
                                    <li>Single Page / Landing Page & Multiple Page Website Concept<i class="bi bi-filetype-cs"></i></li>
                                    <li>CSS Animations & Implementation With Self Branding<i class="bi bi-filetype-js"></i></li>
                                    <li>PSD To HTML & CSS Convert With Responsive<i class="bi bi-filetype-cs"></i></li>
                                    <li>Introduction To Bootstrap<i class="bi bi-filetype-cs"></i></li>
                                  </ul>
                                  <a href="#" class="btn btn-primary">কোর্সের বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@push('js')
<script>
    document.getElementById("actionButton").addEventListener("click", function(event) {
        // Check if the user is authenticated using JavaScript
        @if(Auth::check())
            // Perform the action here (e.g., redirect, submit form, etc.)
            alert("Action performed successfully!");
        @else
            // If not authenticated, show the notification
            event.preventDefault();  // Prevent button action
            alert("You have to login first!");
            window.location.href = "{{ route('login') }}"; // Redirect to the login page
        @endif
    });
</script>
@endpush
