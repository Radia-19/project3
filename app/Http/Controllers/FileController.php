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
    public function store(Request $request )
    {
        $validated = $request->validate([
            'name'=> 'required|unique:books,name',
            'details'=> 'required',
            'book' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:15360',
        ]);
        //$validator->validate();

        DB::transaction(function () use($request) {
        $bookName = uniqid().sha1(rand(100,9000)).'.'.request()->file('book')->extension();
        \request()->file('book')->move(public_path('uploads/'),$bookName);
            Book::create([
                'user_id'=> Auth::id(),
                'name'=> $request->name,
                'details' => $request->details,
                'book'=> $request->book,
            ]);
        });
        return to_route('file')->with('okMsg','File Uploaded Successfully');

    }

    public function show($id)
    {
        $book = Book::findOrFail($id);//single object
        return view('updateUpload',compact('book'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'details' => 'nullable|string',
        'book' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png|max:15360',
    ]);

    $book = Book::findOrFail($id);

    if ($request->hasFile('book')) {
        // Handle file upload
        $bookName = uniqid().sha1(rand(100,9000)).'.'.request()->file('book')->extension();
        \request()->file('book')->move(public_path('uploads/'),$bookName);

        // Delete the old file (optional)
        // if ($book->book && file_exists(public_path('uploads/' . $book->book))) {
        //     unlink(public_path('uploads/' . $book->book));
        // }

        $book->update([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
            'book' => $bookName, // Save new file name
        ]);
    // } else {
    //     $book->update([
    //         'name' => $request->input('name'),
    //         'details' => $request->input('details'),
    //     ]);
    }

    return to_route('file')->with('success', 'Book updated successfully');
}


    public function delete($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();
        return to_route('home')->with('success', 'book deleted successfully');
    }
}
