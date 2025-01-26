<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        // $student=DB::table('students')->count();

        // $course = DB::table('courses')->first(); // Get the first course
        // $fee = $course ? $course->fee : 0;

        $totalFee = DB::table('courses')->sum('fee');

        return view('admin.dashboard', compact('totalFee'));
    }

}
//, compact('student','fee')
