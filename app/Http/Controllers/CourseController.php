<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('createCourse');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name' => 'required|min:5',
           'details'=> 'required',
           'image'=> 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $validator->validate();

        DB::transaction(function () use($request) {
           Course::create([
              'name' => $request->input('name'),
              'details' => $request->input('details'),
              'user_id' => Auth::id(), // Add user_id here
           ]);
        });
        return to_route('course')->with('success', 'Course added successfully');

    }

    public function details(){
        return view("details");
    }
}
