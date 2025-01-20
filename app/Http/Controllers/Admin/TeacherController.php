<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function addTeacher(){
        return view('admin.addTeachet');
    }

    public function storeTeacher(Request $request){

        $validatedData = $request->validate([
            'teacherName' => 'required',
            'teacherRegistration' => 'required|unique:teachers|min:7',
            'teacherPhone' => 'required',
            'teacherEmail' => 'required',
            'teacherAddress' => 'required',
            'teacherDepartment' => 'required',
            'teacherImage' => 'required | mimes:jpeg,jpg,png,PNG',
        ]);


        $data=array();
        $data['teacherName']=$request->teacherName;
        $data['teacherRegistration']=$request->teacherRegistration;
        $data['teacherPhone']=$request->teacherPhone;
        $data['teacherEmail']=$request->teacherEmail;
        $data['teacherAddress']=$request->teacherAddress;
        $data['teacherDepartment']=$request->teacherDepartment;

        $image=$request->file('teacherImage');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='upload_image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['teacherImage']=$image_url;

        $storeTeacher=DB::table('teachers')->insert($data);

        if($storeTeacher){
            $notificatin=array(
                'message'=>'Successfully Teacher Inserted',
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

    public function allTeacher(){
        $allTeachers=DB::table('teachers')->get();
        return view('admin.allTeacher',compact('allTeachers'));
    }

    public function viewTeacher($id){
        $viewTeacher = DB::table('teachers')->where('id', $id)->first();
        return view('admin.viewTeachers',compact('viewTeacher'));
    }

    public function editTeacher($id){
        $editTeacher = DB::table('teachers')->where('id', $id)->first();
        return view('admin.editTeachers',compact('editTeacher'));
    }

    public function updateTeacher(Request $request,$id){

        $validatedData = $request->validate([
            'teacherName' => 'required',
            'teacherRegistration' => 'required|min:7',
            'teacherPhone' => 'required',
            'teacherEmail' => 'required',
            'teacherAddress' => 'required',
            'teacherDepartment' => 'required',
            'teacherImage' => 'mimes:jpeg,jpg,png,PNG',
        ]);

        $data=array();
        $data['teacherName']=$request->teacherName;
        $data['teacherRegistration']=$request->teacherRegistation;
        $data['teacherPhone']=$request->teacherPhone;
        $data['teacherEmail']=$request->teacherEmail;
        $data['teacherAddress']=$request->teacherAddress;
        $data['teacherDepartment']=$request->teacherDepartment;

        $image=$request->file('teacherImage');
            if($image){
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='upload_image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['teacherImage']=$image_url;


                unlink($request->oldImage);
                DB::table('teachers')->where('id',$id)->update($data);
                $notificatin=array(
                    'message'=>'Successfully Teacher Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->route('allTeacher')->with($notificatin);
            }else{
                $data['teacherImage']=$request->oldImage;
                DB::table('teachers')->where('id',$id)->update($data);
                $notificatin=array(
                    'message'=>'Successfully Teacher Updated',
                    'alert-type'=>'success'
                );
                return Redirect()->route('allTeacher')->with($notificatin);
            }

    }

    public function deleteTeacher($id){
        $teacherImage=DB::table('teachers')->where('id',$id)->first();
        $image= $teacherImage->teacherImage;
        $delete=DB::table('teachers')->where('id',$id)->delete();
        if($delete){
            unlink($image);
            $notificatin=array(
                'message'=>'Successfully Teacher Deleted',
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
