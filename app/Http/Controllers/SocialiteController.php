<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirect($soc)
    {
        return Socialite::driver($soc)->redirect();
    }

    public function callback($soc)
    {

        $userSocial = Socialite::driver($soc)->user();
        //dd($userSocial);
        $user = User::where('name', 'like', $userSocial->getNickname())->first();

        if (!$user) {
            $user = User::query()->create([
                'email' => $userSocial->getNickname() . '@laravel.com',
                'name' => $userSocial->getNickname(),
                'password' => 'password'
            ]);
        }
        Auth::login($user);
        return redirect('/');
    }
}
