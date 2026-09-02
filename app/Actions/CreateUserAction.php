<?php

namespace App\Actions;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CreateUserAction
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


     public function execute(array $userData): User
    {   
        $newUser['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
 
        return $user;
    }

}
