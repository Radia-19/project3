<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerification;
use App\Models\GoogleAccount;
use Illuminate\Http\Request;
use App\Mail\EmailVerify;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:trainer,user',
        ]);

        if (Auth::attempt([
           'username' => $request->username,
            'password' => $request->password
        ])) {
            $user = Auth::user();

            // Check if the role matches
            if ($user->role !== $request->role) {
                Auth::logout();
                return redirect()->route('login.show')->with('errMsg', 'Invalid credentials for this role.');
            }

            // Redirect based on role
            if ($user->role === 'user') {
                return redirect()->route('home')->with('okMsg', 'Welcome, User!');
            } elseif ($user->role === 'trainer') {
                return redirect()->route('home')->with('okMsg', 'Welcome, Trainer!');
            }
        }

        // Authentication failed
        return redirect()->route('login.show')->with('errMsg', 'Invalid credentials.');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function showRegister()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:4|unique:users,username|alpha_dash',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|alpha_dash|confirmed'
        ]);

        DB::transaction(function () use($request){

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        });
         return to_route('login.show')->with('okMsg','Registered Successfully! Login Now ');

    }

    public function verifyUser($userId,$token)
    {
        $findUser = UserVerification::where('user_id', $userId)->where  ('token', $token)->first();

        if ($findUser) {

            $findUser->delete();
            User::findOrFail($userId)->update([
                'email_verified' => '1'
            ]);

            return redirect()->route('user.login.show')->with('success', 'Email verified successfully!');

        }else{
            return 'Hacker Detected';
        }

    }

    public function redirectTogoogle()
    {
        //dd(request()->all());
        // Redirect the user to Google's OAuth page
        return Socialite::driver('google')->redirect();

    }

    public function handleGoogleCallback()
    {

        try {
            $userData = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login.show')->with('error', 'Google login failed.');
        }

        // If the user is logged in, link their Google account
        if (Auth::check()) {
            $user = Auth::user();

            // Check if this Google ID is already linked to another user
            $duplicateGoogleAccount = GoogleAccount::where('google_id', $userData->getId())->first();
            if ($duplicateGoogleAccount) {
                return redirect()->route('home')->with('error', 'Google Account Already In Use.');
            }

            // Create a new Google account entry for the logged-in user
            GoogleAccount::create([
                'user_id' => $user->id,
                'google_id' => $userData->getId(),
                'google_avatar' => $userData->getAvatar(),
            ]);

            return redirect()->route('home')->with('success', 'Google Account Linked Successfully.');
        }

        // If no user is logged in, check if a user with this Google ID exists
        $googleAccount = GoogleAccount::where('google_id', $userData->getId())->first();

        if ($googleAccount) {
            $duplicateUser = $googleAccount->user;

            // Ensure only 'user' role can log in via Google
            if ($duplicateUser && $duplicateUser->role !== 'user') {
                return redirect()->route('login.show')->with('error', 'Unauthorized role for Google login.');
            }

            // Log in the user associated with this Google account
            Auth::login($duplicateUser);
            return redirect()->route('home');
        }

        // If no user is associated with this Google ID, redirect to login with an error
        return redirect()->route('login.show')->with('error', 'No Account Found.');
    }




}
//->financial()->create()
