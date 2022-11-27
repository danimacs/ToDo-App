<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callbackGitHub()
    {
        try {
            $github_user = Socialite::driver('github')->user();

            $user = \App\Models\User::where('email', $github_user->getEmail())->first();


            if (!$user){

                $new_user = \App\Models\User::create([
                    'name' => $github_user->getName(),
                    'email' => $github_user->getEmail(),
                    'device_code' => $github_user->getId()


                ]);

                Auth::login($new_user);

                return  redirect('/dashboard');
            }else{
                Auth::login($user);
                return  redirect('/dashboard');

            }

        }catch (\Throwable $th){
            dd("error ".$th->getMessage());

        }

    }
}
