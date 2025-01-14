@extends('layouts.userLayout')

@section('title','Home')

@push('css')

@endpush

@section('content')

<section class="department">
	<div class="text-center mt-5 mb-3">
        <h6 class="section-title bg-white text-start text-primary pe-3">Course Details</h6>
                        <h4 class="mb-4">আপনার পছন্দের কোর্সটি বেছে নিন আর দক্ষতা অর্জন করে হয়ে উঠুন স্বাবলম্বী।</h4>
    </div>
	<div class="container">
             <div class="row">
                    <div  class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                    <h5 class="m-3">WEB DESIGN &amp; DEVELOPMENT</h5>
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                            <a href="#" style="text-decoration: none">
                                                <div class="card" style="width: 18rem; border-radius: 15px;">
                                                    <img src="{{asset('image/web1.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                    <div class="card-body">
                                                      <h5 class="card-title text-black">Basic Web Design</h5>
                                                      <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                        সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                      <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                    </div>
                                                </div>
                                            </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                            <a href="#" style="text-decoration: none">
                                                <div class="card" style="width: 18rem; border-radius: 15px;">
                                                    <img src="{{asset('image/web2.jpg')}}" class="card-img-top rounded-top-3" alt="web2.jpg">
                                                    <div class="card-body">
                                                      <h5 class="card-title text-black">Advance Web Development</h5>
                                                      <p class="card-text text-black mb-2">ফুল ব্যাকেন্ড ওয়েব ডেভেলপমেন্ট (Laravel/Django)</p>
                                                      <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                    </div>
                                                  </div>
                                            </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                            <a href="#" style="text-decoration: none">
                                                <div class="card" style="width: 18rem; border-radius: 15px;">
                                                    <img src="{{asset('image/web3.jpg')}}" class="card-img-top rounded-top-3" alt="web3.jpg">
                                                    <div class="card-body">
                                                      <h5 class="card-title text-black">Full Stack Web Development (Mern)</h5>
                                                      <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                      <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                    </div>
                                                  </div>
                                            </a>
                                    </div>

                <h5 class="m-3">GRAPHIC DESIGN</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/graph1.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">UI and Interactive Design</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/graph2.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Motion Graphics and Animation</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/graph3.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Illustration</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">Digital Marketing </h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/dmarket1.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Social Media Marketing</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/dmarket2.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Search Engine Optimization (SEO)</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/dmarket3.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Content Marketing</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">ANIMATION</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Animation and Gaming</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="">Animation and VFX</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">2D Animation</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="">3D Animation</a>
                                            </li>
                                        </ul>
                                    </div>


                <h5>BASIC COURSES</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">English</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Basic Computer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Programming language</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Leadership and Management</a>
                                            </li>
                                        </ul>
                                    </div>
                <h5>CYBER SECURITY</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Network security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Application security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Information security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Cloud Security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5>ANDROID APP DEVELOPMENT</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">App Development Basics</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Kotlin Programming Fundamentals</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#"> UI/UX design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Meta's Android</a>
                                            </li>
                                        </ul>
                                    </div>


                            </div>
                      </div>
                 </div>
    </div>

</section>


@endsection

@push('css')

@endpush
