<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController 
{
    public function __invoke()
    {
        $user = User::query()->find(1);
    dd(
            $user->email_verified_at
        );

        return view('welcome');
    }
}