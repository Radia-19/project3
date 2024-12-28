<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function course(){
        return view("course");
    }
    public function contact(){
        return view("contact");
    }
    public function payment(){
        return view("payment");
    }
}
