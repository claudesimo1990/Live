<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();
        return response()->json(users, 200);
    }
}
