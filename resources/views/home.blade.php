@extends('layouts.userLayout')

@section('title','Home')

@push('css')

@endpush

@section('slider')
    @include('partials.slider')
@endsection

@section('content')


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">দক্ষ প্রশিক্ষক</h5>
                        <p>Our instructors are skilled experts who share their knowledge through engaging courses</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">অনলাইন ক্লাসসমূহ</h5>
                        <p>Our online courses offer learning opportunities, allowing anyone to gain new skills</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">প্রজেক্টসমূহ</h5>
                            <p>Our IT projects involve the application of technology to solve problems,or create new solutions</p>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">কোর্সসমূহ</h5>
                        <p>Our courses expand opportunities and empower students with essential learning tools</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="image/image-700x700.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">আমাদের সম্পর্কে বিস্তারিত</h6>
                <h1 class="mb-4">লার্নিং ম্যানেজমেন্ট সিস্টেমে স্বাগতম</h1>
                <p class="mb-4">আমাদের প্রতিষ্ঠানে, আমরা এমন শিক্ষা প্রদানের মাধ্যমে মনকে ক্ষমতায়ন এবং ভবিষ্যৎ গঠনে বিশ্বাস করি যা বৃদ্ধিকে অনুপ্রাণিত করে এবং উদ্ভাবনকে উৎসাহিত করে।</p>
                <p class="mb-4">আমরা শিক্ষার্থীদের জ্ঞান এবং সাফল্যের পথ প্রদান করতে প্রতিশ্রুতিবদ্ধ, যেখানে উচ্চাকাঙ্ক্ষা অর্জনে পরিণত হয়।</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Professional Certificate</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lifetime Access</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ensure Job Marketplace</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Easy Learning</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">আরো পড়ুন</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Task Start -->
<div class="container">
    <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            @if(Auth::check() && (Auth::user()->role === 'user' || Auth::user()->role === 'trainer'))
                <a href="{{ route('task') }}">
            <div class="service-item text-center pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                    <h5 class="mb-3">Task</h5>
                    <p>Class Notices</p>
                </div>
            </div>
                </a>
                @endif
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            @if(Auth::check() && (Auth::user()->role === 'user' || Auth::user()->role === 'trainer'))
               <a href="{{ route('file') }}">
            <div class="service-item text-center pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                    <h5 class="mb-3">Files</h5>
                    <p>Class Modules</p>
                </div>
            </div>
            </a>
             @endif
        </div>
    </div>
</div>
<!-- Task End-->

<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">ক্যাটাগরি</h6>
            <h1 class="mb-5">কোর্সসমূহের-তালিকা</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="image/image-800x300.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট</h5>
                                <small class="text-primary">১০টি কোর্স</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="image/image-600x400(1).jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">গ্রাফিক্স ডিজাইন</h5>
                                <small class="text-primary">৫টি কোর্স</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="image/image-600x400.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">ডিজিটাল মার্কেটিং</h5>
                                <small class="text-primary">১৫টি কোর্স</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">সাইবার সিকিউরিটি</h5>
                        <small class="text-primary">৭টি কোর্স</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories Start -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">দক্ষ প্রশিক্ষক</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="image/image-500x500 (1).jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Arhan Shiddhiq</h5>
                        <small>Web Developer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="image/image-500x500.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Momena Murtaza</h5>
                        <small>IT Coordinator</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="image/image-500x500 (1).jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Afsar Alam</h5>
                        <small>Security Specialist</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="image/image-500x500.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Sahar Rahman</h5>
                        <small>Software Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5"> শিক্ষার্থীরা যা বলছেন!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="image/image-100x100 (1).jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Samina Sanu</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">" This is the best learning institute for me. I achieve my goals with the help of brilliant trainers. "</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="image/image-100x100.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Babu Basar</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">" How inspiring the platform is! Love theyre' strategis. Classes are always on time and unique projects. "</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="image/image-100x100 (1).jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Zabin Roy</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">" I really appreciate how they give effort in the weaknesses specially and help to fix the errors. "</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="image/image-100x100.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Turhan Khan</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">" This website helps with very well learing mogule and expert trainers, student groups are awesome. "</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



@endsection

@push('css')

@endpush




