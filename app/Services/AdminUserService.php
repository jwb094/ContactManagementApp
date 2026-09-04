<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserService{


public function updateAdminUser(array $updatedAdminUserData,int $updatedAdminUserDataId): User{

        $adminUser = User::findOrFail($updatedAdminUserDataId);

        $adminUser['password'] = Hash::make($adminUser['password']);

        $adminUser->update($updatedAdminUserData);
        
        return $adminUser->refresh();
}

}