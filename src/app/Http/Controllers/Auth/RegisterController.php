<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\welcome_email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function redirectTo()
    {
        return route('news.index');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagePath = Storage::disk('uploads')->put($data['email'] . '/avatar/', $data['avatar']);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => 'uploads/' . $imagePath,
            'password' => Hash::make($data['password'])
        ]);

        Mail::to($user->email)->send(new welcome_email($user));

        flashy()->success('bienvenue sur Goaubled et merci de nous faire confiance');

        return $user;
    }
}
