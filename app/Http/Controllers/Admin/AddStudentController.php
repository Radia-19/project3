<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AddStudentController extends Controller
{
    public function addStudent()
    {
        return view('admin.addStudent');
    }

    public function storeStudent(Request $request)
    {
        $validatedData = $request->validate([
            'studentName' => 'required',
            'studentRegistation' => 'required|unique:students|max:6|min:6',
            'studentFatherName' => 'required',
            'studentMotherName' => 'required',
            'studentPhone' => 'required',
            'studentAddress' => 'required',
            //'studentDepartment' => 'required',
            'studentImage' => 'required|mimes:jpeg,jpg,png,PNG',
        ]);

        $data = $validatedData;

        // Check the current batch
        $currentBatch = Student::max('batch') ?? 1; // Get the current batch or default to 1
        $studentsInCurrentBatch = Student::where('batch', $currentBatch)->count();

        if ($studentsInCurrentBatch >= 10) {
            // Move to the next batch and mark the student as pending
            $data['batch'] = $currentBatch + 1;
            $data['status'] = 'approved';
            $message = 'You have been added to the current batch and approved.';
        } else {
            // Add the student to the current batch and approve them
            $data['batch'] = $currentBatch;
            $data['status'] = 'pending';
            $message = 'The batch is full. You have been moved to the next batch and marked as pending.';
        }


        // Handle student image
        if ($request->hasFile('studentImage')) {
            $image = $request->file('studentImage');
            $imageName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $imagePath = 'upload_image/' . $imageName;
            $image->move('upload_image', $imageName);
            $data['studentImage'] = $imagePath;
        }

        Student::create($data);

        return redirect()->back()->with('message', $message);
    }

    public function approveShow()
    {
        // Fetch all pending students for approval
        $students = Student::where('status', 'pending')->get();

        return view('admin.approvedShow', compact('students'));
    }


    public function paymentShow($studentId)
    {
        $student = Student::with('payment')->findOrFail($studentId);

        return view('admin.payment', compact('student'));
    }


    public function payment(Request $request)
    {
        $validatedData = $request->validate([
            'payment_method' => 'required|string|in:card,bank,cash,paypal',
            'amount' => 'required|numeric|min:0',
            'student_id' => 'required|exists:students,id', // Validate that student exists
        ]);

        Payment::create([
            'student_id' => $validatedData['student_id'], // Link to student ID
            'payment_method' => $validatedData['payment_method'],
            'amount' => $validatedData['amount'],
            'status' => 'completed', // Assuming payment is successful
            'paid_at' => now(),
        ]);

        return redirect()->route('allStudents')->with('success', 'Payment processed successfully.');
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
        return view('admin.editStudent', compact('editStudent'));
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
            'studentDepartment' => 'required',
            'studentImage' => 'nullable|mimes:jpeg,jpg,png,PNG',
        ]);

        $student = Student::findOrFail($id);

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

    // public function approveShow()
    // {
    //     $allStudents = Student::with('admin')->where('status','pending')->latest()->paginate(10);
    //     return view('admin.allStudent', compact('allStudents'));
    // }

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

    public function batchStudents($batchNumber)
    {
        $students = Student::where('batch', $batchNumber)->get();
        return view('admin.batchStudents', compact('students', 'batchNumber'));
    }

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


}
