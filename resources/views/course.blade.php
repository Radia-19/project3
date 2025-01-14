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
                                   <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/web4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                <div class="card-body">
                                                  <h5 class="card-title text-black">Database</h5>
                                                  <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                    সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                  <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">GRAPHIC DESIGN</h5>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/graph4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Game Design</h5>
                                                <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                    সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">Digital Marketing </h5>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
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
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/dmarket4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Email Marketing</h5>
                                                <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                    সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">ANIMATION</h5>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/anime1.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Animation and Gaming</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/anime2.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Animation and VFX</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/anime3.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">2D Animation</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/anime4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">3D Animation</h5>
                                                <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                    সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">BASIC COURSES</h5>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/basic1.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">English</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/basic2.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Basic Computer</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/basic3.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Leadership and Management</h5>
                                                <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                        <a href="#" style="text-decoration: none">
                                            <div class="card" style="width: 18rem; border-radius: 15px;">
                                                <img src="{{asset('image/basic4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                <div class="card-body">
                                                <h5 class="card-title text-black">Mathematic</h5>
                                                <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                    সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                <h5 class="m-3">CYBER SECURITY</h5>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                                <a href="#" style="text-decoration: none">
                                                    <div class="card" style="width: 18rem; border-radius: 15px;">
                                                        <img src="{{asset('image/cyber1.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                        <div class="card-body">
                                                        <h5 class="card-title text-black">Network security</h5>
                                                        <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                        <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                                <a href="#" style="text-decoration: none">
                                                    <div class="card" style="width: 18rem; border-radius: 15px;">
                                                        <img src="{{asset('image/cyber2.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                        <div class="card-body">
                                                        <h5 class="card-title text-black">Information security</h5>
                                                        <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                        <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                                <a href="#" style="text-decoration: none">
                                                    <div class="card" style="width: 18rem; border-radius: 15px;">
                                                        <img src="{{asset('image/cyber3.jpg')}}" class="card-img-top rounded-top-3" alt="graph1.jpg">
                                                        <div class="card-body">
                                                        <h5 class="card-title text-black">Cloud Security</h5>
                                                        <p class="card-text text-black mb-2">ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট (Python & JavaScript)</p>
                                                        <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 ">
                                                <a href="#" style="text-decoration: none">
                                                    <div class="card" style="width: 18rem; border-radius: 15px;">
                                                        <img src="{{asset('image/cyber4.jpg')}}" class="card-img-top rounded-top-3" alt="web1.jpg">
                                                        <div class="card-body">
                                                        <h5 class="card-title text-black">Application Security</h5>
                                                        <p class="card-text text-black mb-2">ফ্রন্টএন্ড ওয়েব ডেভেলপমেন্ট
                                                            সঙ্গে জব প্লেসমেন্ট সাপোর্ট</p>
                                                        <a href="#"><p class="text-black-50 text-center">বিস্তারিত <i class="bi bi-arrow-right"></i></p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                            </div>
                      </div>
                 </div>
    </div>
    <nav aria-label="Page navigation example" class="m-4">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
          </li>
        </ul>
      </nav>

</section>


@endsection

@push('css')

@endpush
