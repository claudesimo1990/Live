<?php


namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }

}
