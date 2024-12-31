<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request )
    {
        $validated = $request->validate([
            'name'=> 'required|unique:books,name',
            'details'=> 'required',
            'book' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png|max:15360',
            ]);


        $bookName = uniqid().sha1(rand(100,9000)).'.'.request()->file('book')->extension();
        \request()->file('book')->move(public_path('uploads/'),$bookName);
        Book::create([
            'user_id'=> Auth::id(),
            'name'=> $request->name,
            'details' => $request->details,
            'book'=> $bookName
        ]);
        return redirect()->back()->with('okMsg','Uploaded Successfully');
    }

}
