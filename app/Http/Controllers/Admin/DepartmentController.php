<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{

    public function graph(){
        $graphTeachers=DB::table('teachers')->where(['teacherDepartment'=>1])->get();
        return view('admin.graph',compact('graphTeachers'));
    }
    public function anime(){
        $animeTeachers=DB::table('teachers')->where(['teacherDepartment'=>2])->get();
        return view('admin.anime',compact('animeTeachers'));
    }
    public function web(){
        $webTeachers=DB::table('teachers')->where(['teacherDepartment'=>3])->get();
        return view('admin.web',compact('webTeachers'));
    }
    public function app(){
        $appTeachers=DB::table('teachers')->where(['teacherDepartment'=>4])->get();
        return view('admin.app',compact('appTeachers'));
    }
    public function basic(){
        $basicTeachers=DB::table('teachers')->where(['teacherDepartment'=>5])->get();
        return view('admin.basic',compact('basicTeachers'));
    }
    public function cyber(){
        $cyberTeachers=DB::table('teachers')->where(['teacherDepartment'=>6])->get();
        return view('admin.cyber',compact('cyberTeachers'));
    }
}
