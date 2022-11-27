<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = \App\Models\User::where('email', $google_user->getEmail())->first();


            if (!$user){

                $new_user = \App\Models\User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()


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
