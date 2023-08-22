<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function render($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        $user = User::where([
            'provider' => $provider,
            'provider_id' => $socialiteUser->getId(),
        ])->first();
        
        if ($provider == 'github' && !$user) {
            $user = User::create([
                'name' => $socialiteUser->getNickname(),
                'email' => $socialiteUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'email_verified_at' => now(),
            ]);
        }

        if (!$user) 
        {
            $user = User::create([
                'name' => $socialiteUser->getName(),
                'email' => $socialiteUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'email_verified_at' => now(),
            ]);
        }


        Auth::login($user);
        return redirect('/');
    }
}