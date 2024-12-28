@extends('layouts.userLayout')

@section('title','Home')

@push('css')

@endpush

@section('content')

<section class="department">
	<div class="text-center mt-5 mb-3">
        <h6 class="section-title bg-white text-start text-primary pe-3">Course Details</h6>
                        <h1 class="mb-4">Welcome to FreeLEARN</h1>
    </div>
	<div class="container" ng-controller="controllerBotValley">
             <div class="row">
                    <div  class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                    <h5>WEB DESIGN &amp; DEVELOPMENT</h5>
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Basic Web Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Advance Web Development</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Mern Stack</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">PHP/Python</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Django/Laravel</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Database</a>
                                            </li>
                                        </ul>
                                    </div>

                <h5>GRAPHIC DESIGN</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Web Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">UI and Interactive Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Advertising and Marketing Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Motion Graphics and Animation</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Packaging Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="h#">Game Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Illustration</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Publication and Typographic Design</a>
                                            </li>
                                        </ul>
                                    </div>
                <h5>ANIMATION</h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Fine Arts</a>
                                            </li>
                                        </ul>
                                    </div>
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
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Animation and Filmmaking</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Media Arts</a>
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
                <h5>ADVANCE COMPUTER </h5>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Artificial Intelligence (AI)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Software Development</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Machine Learning</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Cloud Computing</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Internet of Things (IoT)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Big Data Analysis</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Project management</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Computer Science </a>
                                            </li>
                                        </ul>
                                    </div>
                <h5>Basic COURSES</h5>
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
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Endpoint security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Zero trust</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">IoT security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="depName">
                                            <li class="dropdown">
                                                <a href="#">Operational security</a>
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
