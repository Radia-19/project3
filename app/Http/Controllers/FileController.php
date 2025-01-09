<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function create()
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
        //$validator->validate();

        DB::transaction(function () use($request) {
        $bookName = uniqid().sha1(rand(100,9000)).'.'.request()->file('book')->extension();
        \request()->file('book')->move(public_path('uploads/'),$bookName);
            Book::create([
                'user_id'=> Auth::id(),
                'name'=> $request->name,
                'details' => $request->details,
                'book'=> $bookName
            ]);
        });
        return redirect()->back()->with('okMsg','Uploaded Successfully');

    }
    public function index(){

        $book = Book::where('user_id',Auth::id())->paginate(5); //ELOQUENT + QUERY BUILDER
        return view('books',compact('book'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);//single object
        return view('updateUpload',compact('book'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $book = Book::findOrFail($id);

        $book->update([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
        ]);

        return to_route('books')->with('success', 'book updated successfully');
    }


    public function delete($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();
        return to_route('home')->with('success', 'book deleted successfully');
    }
    //  public function approved($bookId)
    //  {
    //      $book = Book::findOrFail($bookId);

    //      if($book->user_id == Auth::id()){

    //          $book->update([
    //                'status' => 'Approved'
    //          ]);
    //          return redirect()->back();
    //      }else{
    //          return 'Hacker Found!';
    //      }

    //  }
    //  public function approveShow()
    // {
    //     $pendingbooks = Book::with('user')->where('status','pending')->latest()->paginate(3);
    //     return view('approval', compact('pendingbooks'));
    // }

    // public function bookApproveStatusUpdate($bookId, $status)
    // {
    //     $book = Book::findOrFail($bookId);

    //     if (in_array($status, ['approved', 'declined'])) {
    //         $data = [
    //             'status' => $status,
    //         ];

    //         if ($status === 'approved') {
    //             $data['approve_by'] = Auth::guard('admin')->id();
    //             $data['approve_date'] = now();
    //         }

    //         $book->update($data);

    //         return redirect()->back()->with('success', 'Book status updated successfully!');
    //     }

    //     return redirect()->back()->with('error', 'Invalid status provided.');
    // }
}
