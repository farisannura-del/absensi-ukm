<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect ke Google
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Callback Google
     */
    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {

            return redirect('/login')->with(
                'status',
                'Email Google Anda belum terdaftar. Silakan hubungi Administrator.'
            );

        }

        $user->update([

            'google_id' => $googleUser->getId(),

            'avatar' => $googleUser->getAvatar(),

        ]);

        Auth::login($user);

        // Cek role
        if ($user->role === 'admin') {

            return redirect()->route('dashboard');

        }

        return redirect()->route('user.dashboard');
    }
}