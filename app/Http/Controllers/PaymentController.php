<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($studentId)
    {
        $student = Student::with('payment')->findOrFail($studentId);

        return view('admin.payment', compact('student'));
    }

    public function payment(Request $request)
    {
        $validatedData = $request->validate([
            'payment_method' => 'required|string|in:card,bank,cash,mobile',
            'amount' => 'required|numeric|min:0',
            'student_id' => 'required|exists:students,id',
        ]);

        Payment::create([
            'student_id' => $validatedData['student_id'],
            'payment_method' => $validatedData['payment_method'],
            'amount' => $validatedData['amount'],
            'status' => 'completed', // Assuming payment is successful
            'paid_at' => now(),
        ]);

        return redirect()->route('allStudents')->with('success', 'Payment processed successfully.');
    }
}
