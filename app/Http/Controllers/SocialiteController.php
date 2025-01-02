<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SocialiteController extends Controller

{
    /**
     * Redirect to Google for authentication.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }


    /**
     * Handle the Google callback after authentication.
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Find or create the user
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()], // Search by email
                [
                    'username' => $googleUser->getName(), // Map Google name to username
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(Str::random(16)), // Generate a random password
                    'profile_picture' => $googleUser->getAvatar(), // Optional
                ]
            );

            // Log in the user
            Auth::login($user);

            return redirect()->intended('home'); // Redirect to the home page
        } catch (\Exception $e) {
            logger()->error('Google authentication failed', ['error' => $e->getMessage()]);
            return redirect('/login')->withErrors(['error' => 'Failed to authenticate with Google.']);
        }
    }

}


