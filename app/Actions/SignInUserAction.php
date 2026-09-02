<?php

namespace App\Actions;
use Illuminate\Support\Facades\Auth;
class SignInUserAction
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function handle(array $loginDetails): bool{
    //dd($loginDetails);
     //$credentials = $loginDetails->only('email', 'password');

     return Auth::attempt([
        'email' => $loginDetails['email'],
        'password' => $loginDetails['password']
     ]);
    }
}
