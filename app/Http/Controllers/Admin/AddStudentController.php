<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\Payment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AddStudentController extends Controller
{
    public function addStudent()
    {
        $courses = Course::all(['id', 'name', 'fee']);
        //$payments = Payment::all(['payment_method']);
        return view('admin.addStudent', compact('courses'));
    }

    public function storeStudent(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'studentName' => 'required',
            'studentRegistation' => 'required|unique:students|max:6|min:6',
            'studentFatherName' => 'required',
            'studentMotherName' => 'required',
            'studentPhone' => 'required',
            'studentAddress' => 'required',
            'studentImage' => 'required|mimes:jpeg,jpg,png,PNG',
            'course_id' => 'required|exists:courses,id',
            //'course_name' => 'required|exists:courses,name',
            //'course_fee' => 'required|exists:courses,fee',
            //'payment_method' => 'required|exists:payments,payment_method',
            'status' => 'required'
        ]);
        //dd($validatedData);

        $data = $validatedData;

        //dd($request->all());

        // $course = Course::find($data['course_id']);
        // $data['course_name'] = $course->name ?? null;
        // $data['course_fee'] = $course->fee ?? null;

        $currentBatch = Student::max('batch') ?? 1;
        $studentsInCurrentBatch = Student::where('batch', $currentBatch)->count();

        if ($studentsInCurrentBatch >= 10) {

            $data['batch'] = $currentBatch + 1;
            $data['status'] = 'pending';
            $message = 'The batch is full. You have been moved to the next batch and marked as pending.';
        } else {

            $data['batch'] = $currentBatch;
            $data['status'] = 'approved';
            $message = 'You have been added to the current batch and approved.';
        }

        if ($request->hasFile('studentImage')) {
            $image = $request->file('studentImage');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload_image/' . $imageName;
            $image->move('upload_image', $imageName);
            $data['studentImage'] = $imagePath;
        }

        //dd($data);
        Student::create($data);
        //Log::info('Student created successfully', $data);
        //dd('Data inserted');
        //dd($data);

        return redirect()->back()->with('message', $message);
    }

    public function approveShow()
    {
        $students = Student::where('status', 'pending')->get();

        return view('admin.approvedShow', compact('students'));
    }


    public function allStudents()
    {
        $allStudents = Student::paginate(10);
        return view('admin.allStudents', compact('allStudents'));
    }

    public function viewStudent($id)
    {
        $viewStudent = Student::findOrFail($id);
        return view('admin.viewStudent', compact('viewStudent'));
    }

    public function editStudent($id)
    {
        $editStudent = Student::findOrFail($id);
        $courses = Course::all(['id', 'name', 'fee']);
        $payments = Payment::all(['payment_method']);
        return view('admin.editStudent', compact('editStudent', 'courses','payments'));
    }


    public function updateStudent(Request $request, $id)
    {
        $validatedData = $request->validate([
            'studentName' => 'required',
            'studentRegistation' => 'required|max:6|min:6',
            'studentFatherName' => 'required',
            'studentMotherName' => 'required',
            'studentPhone' => 'required',
            'studentAddress' => 'required',
            'studentImage' => 'nullable|mimes:jpeg,jpg,png,PNG',
            'course_id' => 'required|exists:courses,id',
            'course_name' => 'required|exists:course,name',
            'course_fee' => 'required|exists:course,fee',
            //'payment_method' => 'required|exists:payments,payment_method',
            'status' => 'required'
        ]);

        $student = Student::findOrFail($id);

        $course = Course::find($validatedData['course_id']);
        $validatedData['course_name'] = $course->name ?? null;
        $validatedData['course_fee'] = $course->fee ?? null;

        if ($request->hasFile('studentImage')) {
            $image = $request->file('studentImage');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload_image/' . $imageName;
            $image->move('upload_image', $imageName);

            if ($student->studentImage) {
                unlink(public_path($student->studentImage));
            }

            $validatedData['studentImage'] = $imagePath;
        }

        $student->update($validatedData);

        return to_route('allStudents')->with('message', 'Student successfully updated!');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        if ($student->studentImage) {
            unlink(public_path($student->studentImage));
        }

        $student->delete();

        return redirect()->back()->with('message', 'Student successfully deleted!');
    }

    public function studentApproveStatusUpdate($studentId, $status)
    {
        $student = Student::findOrFail($studentId);

        if (in_array($status, ['approved', 'declined'])) {
            $student->update([
                'status' => $status,
                'approve_by' => $status === 'approved' ? Auth::id() : null,
                'approve_date' => $status === 'approved' ? now() : null,
            ]);

            return redirect()->back()->with('message', 'Student status updated successfully!');
        }

        return redirect()->back()->with('error', 'Invalid status provided.');
    }


}















// public function approveShow()
    // {
    //     $allStudents = Student::with('admin')->where('status','pending')->latest()->paginate(10);
    //     return view('admin.allStudent', compact('allStudents'));
    // }
// public function batchStudents($batchNumber)
    // {
    //     $students = Student::where('batch', $batchNumber)->get();
    //     return view('admin.batchStudents', compact('students', 'batchNumber'));
    // }

    // public function assignStudentToCourse(Request $request)
    // {
    //     $validated = $request->validate([
    //         'student_id' => 'required|exists:students,id',
    //         'course_id' => 'required|exists:courses,id',
    //     ]);

    //     $student = Student::findOrFail($validated['student_id']);
    //     $student->courses()->attach($validated['course_id']); // Add the relationship

    //     return redirect()->back()->with('success', 'Student assigned to course successfully.');
    // }

    // public function removeStudentFromCourse(Request $request)
    // {
    //     $validated = $request->validate([
    //         'student_id' => 'required|exists:students,id',
    //         'course_id' => 'required|exists:courses,id',
    //     ]);

    //     $student = Student::findOrFail($validated['student_id']);
    //     $student->courses()->detach($validated['course_id']); // Remove the relationship

    //     return redirect()->back()->with('success', 'Student removed from course successfully.');
    // }



    // public function index(){

    //     $students = Student::paginate(3); //ELOQUENT + QUERY BUILDER
    //     return view('admin.addStudent',compact('students'));
    //  }

    // public function approved($studentId)
    // {
    //     $student = Student::findOrFail($studentId);

    //     //if($student->user_id == Auth::id()){

    //         $student->update([
    //               'status' => 'Approved'
    //         ]);
    //         return redirect()->back();
    //     //}else{
    //     //    return 'Hacker Found!';
    //     //}

    // }
