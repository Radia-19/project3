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
           'image'=> 'required|image|mimes:jpg,jpeg,png|max:5120',
           'video' => 'nullable|file|mimes:mp4,avi,mov',
           'batch_start' => 'nullable|date',
           'admission_end' => 'nullable|date',
           'live_class_time' => 'nullable|string',
           'live_classes' => 'nullable|integer',
           'projects' => 'nullable|integer',
        ]);
        $validator->validate();

        $imagePath = null;
        $videoPath = null;

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = hexdec(uniqid()) . '.' . strtolower($video->getClientOriginalExtension());
            $videoPath = 'upload/' . $videoName;
            $video->move(public_path('upload/videos'), $videoName); // Storing video in upload/videos directory
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload/' . $imageName;
            $image->move(public_path('upload/'), $imageName);
        }

        DB::transaction(function () use($request, $imagePath, $videoPath) {
           Course::create([
              'user_id' => Auth::id(),
              'name' => $request->input('name'),
              'details' => $request->input('details'),
              'image' => $imagePath,
              'video' => $videoPath,
              'batch_start' => $request->input('batch_start'),
             'admission_end' => $request->input('admission_end'),
             'live_class_time' => $request->input('live_class_time'),
             'live_classes' => $request->input('live_classes'),
             'projects' => $request->input('projects'),
           ]);
        });
        return to_route('course')->with('success', 'Course added successfully');

    }
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('details', compact('course'));
    }

    public function updateShow($id)
    {
        $course = Course::findOrFail($id);//single object
        return view('updateCourse',compact('course'));
    }

    public function update(Request $request, $id)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'details'=> 'required',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'video' => 'nullable|file|mimes:mp4,avi,mov',
            'batch_start' => 'nullable|date',
            'admission_end' => 'nullable|date',
            'live_class_time' => 'nullable|string',
            'live_classes' => 'nullable|integer',
            'projects' => 'nullable|integer',
        ]);
        $validator->validate();

        // Find the course by ID
        $course = Course::findOrFail($id);

        // Initialize paths
        $imagePath = $course->image;
        $videoPath = $course->video;

        // Handle image upload (if provided)
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (file_exists(public_path($imagePath))) {
                unlink(public_path($imagePath));
            }

            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload/' . $imageName;
            $image->move(public_path('upload'), $imageName);
        }

        // Handle video upload (if provided)
        if ($request->hasFile('video')) {
            // Delete the old video if it exists
            if (file_exists(public_path($videoPath))) {
                unlink(public_path($videoPath));
            }

            $video = $request->file('video');
            $videoName = hexdec(uniqid()) . '.' . strtolower($video->getClientOriginalExtension());
            $videoPath = 'upload/videos/' . $videoName;
            $video->move(public_path('upload/videos'), $videoName);
        }

        // Update the course details
        $course->update([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
            'image' => $imagePath,
            'video' => $videoPath,
            'batch_start' => $request->input('batch_start'),
            'admission_end' => $request->input('admission_end'),
            'live_class_time' => $request->input('live_class_time'),
            'live_classes' => $request->input('live_classes'),
            'projects' => $request->input('projects'),
        ]);

        return redirect()->route('course')->with('success', 'Course updated successfully');
    }
    public function delete($id)
    {
        $course = Course::findOrFail($id);

        if (file_exists(public_path($course->image))) {
            unlink(public_path($course->image));
        }

        if (file_exists(public_path($course->video))) {
            unlink(public_path($course->video));
        }

        $course->delete();

        return redirect()->route('course')->with('success', 'Course deleted successfully');
    }



}

