<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){

       $books = Book::where('user_id',Auth::id())->paginate(3); //ELOQUENT + QUERY BUILDER
       return view('books',compact('books'));
    }
    public function sendForSale($bookId)
    {
        $book = Book::findOrFail($bookId);

        if($book->user_id == Auth::id()){

            $book->update([
                  'status' => 'selling'
            ]);
            return redirect()->back();
        }else{
            return 'Hacker Found!';
        }

    }

}
