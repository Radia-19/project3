<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index(){
        return view("home");
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
    public function file(Request $request){

        $randomBooks = Book::with('user')
        ->inRandomOrder()
        ->where('status', 'approved')
        ->paginate(10);

        return view("file", compact("randomBooks"));
    }
    public function task()
    {
        //$allTasks = Task::where('user_id',Auth::id())->paginate(5);
        if (Auth::user()->role === 'trainer' || Auth::user()->role === 'user') {

            $allTasks = Task::paginate(5);
        } else {

            //$allTasks = Task::where('user_id', Auth::id())->paginate(5);
        }

        return view('task', compact('allTasks'));
    }
}
