<?php

namespace App\Services;

use App\Models\User;

class UserService{

    public function register($validatedData)
    {
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        return $user;
    }    

    public function index()
    {
        $user = User::all();
        return $user;
    }

    public function show_user($show_user)
    {
        $user = User::find($show_user);
        return $user;

    }

    public function destroy($user)
    {
        $user = User::find($user);
        if (!$user) {
            return null;
        }
        $user->delete();
        return $user;
    }

}