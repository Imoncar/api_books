<?php

namespace App\Services;

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserService{

    public function register($validatedData)
    {
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
    }    

}