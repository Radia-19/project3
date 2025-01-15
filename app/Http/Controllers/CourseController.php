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
           'image'=> 'required|image|mimes:jpg,jpeg,png|max:5120'
        ]);
        $validator->validate();

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload/' . $imageName;
            $image->move(public_path('upload/'), $imageName);
        }

        DB::transaction(function () use($request, $imagePath) {
           Course::create([
              'user_id' => Auth::id(),
              'name' => $request->input('name'),
              'details' => $request->input('details'),
              'image' => $imagePath,
           ]);
        });
        return to_route('course')->with('success', 'Course added successfully');

    }

    // $imageName = uniqid().sha1(rand(100,9000)).'.'.request()->file('image')->extension();
        // //\request()->file('image')->move(public_path('uploads/'),$imageName);
        // $filePath = 'uploads/' . $imageName; // Save relative path
        // $request->file('image')->move(public_path('uploads/'), $imageName);
    public function details(){
        return view("details");
    }
}
