<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LinkInBioController extends Controller
{
    public function __invoke(User $user)
    {

        return view("link-in-bio", compact("user"));
        
    }
}
