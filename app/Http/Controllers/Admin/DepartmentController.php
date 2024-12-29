<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function graph(){
        $graphStudents=DB::table('students')->where(['studentDepartment'=>1])->get();
        return view('admin.graph',compact('graphStudents'));
    }
    public function anime(){
        $animeStudents=DB::table('students')->where(['studentDepartment'=>2])->get();
        return view('admin.anime',compact('animeStudents'));
    }
    public function web(){
        $webStudents=DB::table('students')->where(['studentDepartment'=>3])->get();
        return view('admin.web',compact('webStudents'));
    }
    public function app(){
        $appStudents=DB::table('students')->where(['studentDepartment'=>4])->get();
        return view('admin.app',compact('appStudents'));
    }
    public function basic(){
        $basicStudents=DB::table('students')->where(['studentDepartment'=>5])->get();
        return view('admin.basic',compact('basicStudents'));
    }
    public function cyber(){
        $cyberStudents=DB::table('students')->where(['studentDepartment'=>6])->get();
        return view('admin.cyber',compact('cyberStudents'));
    }
}
