<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GithubAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function callbackGitHub()
    {
        try {
            $githubUser = Socialite::driver('github')->stateless()->user();
            $user = User::where('email', $githubUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $githubUser->getName(),
                    'email' => $githubUser->getEmail(),
                    'device_code' => $githubUser->getId()
                ]);
            }

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } catch (Throwable $th) {
            dd("error " . $th->getMessage());
        }
    }
}
