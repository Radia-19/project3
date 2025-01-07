<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Book;
use App\Models\Cashout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function approveShow()
    {
        $pendingbooks = Book::with('user')->where('status','pending')->latest()->paginate(3);
        return view('admin.approval', compact('pendingbooks'));
    }

    public function bookApproveStatusUpdate($bookId, $status)
    {
        $book = Book::findOrFail($bookId);

        if (in_array($status, ['approved', 'declined'])) {
            $data = [
                'status' => $status,
            ];

            if ($status === 'approved') {
                $data['approve_by'] = Auth::guard('admin')->id();
                $data['approve_date'] = now();
            }

            $book->update($data);

            return redirect()->back()->with('success', 'Book status updated successfully!');
        }

        return redirect()->back()->with('error', 'Invalid status provided.');
    }


    // public function buyOutShow()
    // {
    //     $books = Book::where('status','selling')->latest()->paginate(3);

    //     return view('admin.buyout',compact('books'));
    // }

    // public function buyOut(Request $request)
    // {
    //     if (!Auth::guard('admin')->check()) {
    //         return redirect()->route('admin.login'); // Redirect if not authenticated
    //     }
    //     DB::transaction(function () use($request){
    //     $statusArray = ['buy-out','approve-unsellable'];
    //     $status = $request->status;

    //     if($request->book_id != null && in_array($status, $statusArray)) {

    //         $book = Book::findOrFail($request->book_id);

    //         if($status == 'buy-out'){
    //             $book->update([
    //                 'status' => $status,
    //                 'buyout_by'=> Auth::guard('admin')->id(),
    //                 'buyout_date'=> date('Y-m-d H:i:s'),
    //                 'rate' => (float)$request->rate
    //                 ]);

    //                 $getUser = User::findOrFail($request->user_id);

    //                 $getPrevBalance = (float)$getUser->financial->balance;
    //                 $newBalance = $getPrevBalance + (float)$request->rate;

    //                 $getUser->financial()->update([
    //                     'balance' => $newBalance
    //                 ]);
    //                 return redirect()->back();

    //         }else{
    //             $book->update([
    //                 'status' => $status
    //                 ]);
    //             return redirect()->back();

    //         }

    //     }else{

    //         return 'Hacked';
    //     }
    //     });
    // }


    // public function showCashouts()
    // {

    //     $cashouts = Cashout::with('user')->latest()->paginate(10);

    //     return view('admin.cashouts',compact('cashouts'));
    // }

    // public function updateCashouts($cashout_id = null, $status = null)
    // {

    //     if('cashout_id' && $status){

    //         $cashout = Cashout::findOrFail($cashout_id);

    //         $cashout->update([
    //             'status' =>$status
    //         ]);

    //         return redirect()->back();

    //     }else{
    //         abort(403);
    //     }

    // }
}
