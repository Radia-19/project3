<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AddStudentController extends Controller
{
    public function addStudent(){
        return view('admin.addStudent');
    }

    public function storeStudent(Request $request){

        $validatedData = $request->validate([
            'studentName' => 'required',
            'studentRegistation' => 'required|unique:students|max:6|min:6',
            'studentFatherName' => 'required',
            'studentMotherName' => 'required',
            'studentPhone' => 'required',
            'studentAddress' => 'required',
            'studentDepartment' => 'required',
            'studentImage' => 'required | mimes:jpeg,jpg,png,PNG',
        ]);

        $data=array();
        $data['studentName']=$request->studentName;
        $data['studentRegistation']=$request->studentRegistation;
        $data['studentFatherName']=$request->studentFatherName;
        $data['studentMotherName']=$request->studentMotherName;
        $data['studentPhone']=$request->studentPhone;
        $data['studentAddress']=$request->studentAddress;
        $data['studentDepartment']=$request->studentDepartment;

        $image=$request->file('studentImage');
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='upload_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['studentImage']=$image_url;

        $storeStudent=DB::table('students')->insert($data);

        if($storeStudent){
            $notificatin=array(
                ''=>'Successfully Student Inserted',
                'alert-tmessageype'=>'success'
            );
            return Redirect()->back()->with($notificatin);
        }else{
            $notificatin=array(
                'message'=>'Something Went Wrong !',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notificatin);
        }
    }

    public function allStudents(){
        $allStudents=DB::table('students')->get();
        return view('admin.allStudents',compact('allStudents'));
    }

    public function viewStudent($id){
        $viewStudent = DB::table('students')->where('id', $id)->first();
        return view('admin.viewStudent',compact('viewStudent'));
    }

    public function editStudent($id){
        $editStudent = DB::table('students')->where('id', $id)->first();
        return view('admin.editStudent',compact('editStudent'));
    }


    public function updateStudent(Request $request,$id){

        $validatedData = $request->validate([
            'studentName' => 'required',
            'studentRegistation' => 'required|max:6|min:6',
            'studentFatherName' => 'required',
            'studentMotherName' => 'required',
            'studentPhone' => 'required',
            'studentAddress' => 'required',
            'studentDepartment' => 'required',
            'studentImage' => 'mimes:jpeg,jpg,png,PNG',
        ]);

        $data=array();
        $data['studentName']=$request->studentName;
        $data['studentRegistation']=$request->studentRegistation;
        $data['studentFatherName']=$request->studentFatherName;
        $data['studentMotherName']=$request->studentMotherName;
        $data['studentPhone']=$request->studentPhone;
        $data['studentAddress']=$request->studentAddress;
        $data['studentDepartment']=$request->studentDepartment;

        $image=$request->file('studentImage');
            if($image){
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='upload_image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['studentImage']=$image_url;


                unlink($request->oldImage);
                DB::table('students')->where('id',$id)->update($data);
                $notificatin=array(
                    'message'=>'Successfully Student Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->route('allStudents')->with($notificatin);
            }else{
                $data['studentImage']=$request->oldImage;
                DB::table('students')->where('id',$id)->update($data);
                $notificatin=array(
                    'message'=>'Successfully Student Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->route('allStudents')->with($notificatin);
            }

    }



    public function deleteStudent($id){
        $studentImage=DB::table('students')->where('id',$id)->first();
        $image= $studentImage->studentImage;
        $delete=DB::table('students')->where('id',$id)->delete();
        if($delete){
            unlink($image);
            $notificatin=array(
                'message'=>'Successfully Student Deleted',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notificatin);
        }else{
            $notificatin=array(
                'message'=>'Something Went Wrong !',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notificatin);
        }
    }


}
