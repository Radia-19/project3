<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        $randomBooks = Book::with('user')
                        ->inRandomOrder()
                        ->paginate(10);

        return view("home", compact("randomBooks"));
    }
    public function about(){
        return view("about");
    }
    public function course(){
        return view("course");
    }
    public function contact(){
        return view("contact");
    }
    public function search(Request $request)
    {
        $query = $request->input('query', ''); // Default value if no query is provided
        if (empty($query)) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        $results = User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();

        return view('search-results', compact('results', 'query'));
    }
}
