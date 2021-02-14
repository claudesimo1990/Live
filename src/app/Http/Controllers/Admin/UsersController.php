<?php

namespace App\Http\Controllers\Admin;

Use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin',0)->paginate(6);
        return view('admin.users.index',compact('users'));
    }
}
