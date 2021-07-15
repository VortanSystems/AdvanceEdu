<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function index(User $user)
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users,
        ]);
    }
}
