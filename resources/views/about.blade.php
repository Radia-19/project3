@extends('layouts.userLayout')

@section('title','Home')

@push('css')

@endpush

@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(../image/students.jpg); background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown mb-2">লার্নিং ম্যানেজমেন্ট সিস্টেমের জগতে আপনাকে স্বাগতম।</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="{{ route('course') }}">Courses</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="{{ route('course') }}">Contact</a></li>
                            </ol>
                        </nav>
                        <p class="text-white">Education with Purpose, Excellence with Passion</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->




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
                        <h1 class="mb-4">লার্নিং ম্যানেজমেন্ট সিস্টেমের অগ্রযাত্রা</h1>
                        <p class="mb-4">
                            আমাদের প্রতিষ্ঠানে, আমরা এমন শিক্ষা প্রদানের মাধ্যমে মনকে ক্ষমতায়ন এবং ভবিষ্যৎ গঠনে বিশ্বাস করি যা বৃদ্ধিকে অনুপ্রাণিত করে এবং উদ্ভাবনকে উৎসাহিত করে।</p>
                        <p class="mb-4">
                            আমরা শিক্ষার্থীদের জ্ঞান এবং সাফল্যের পথ প্রদান করতে প্রতিশ্রুতিবদ্ধ, যেখানে উচ্চাকাঙ্ক্ষা অর্জনে পরিণত হয়।</p>
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
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">বিস্তারিত</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@endsection

@push('css')

@endpush
