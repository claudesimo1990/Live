<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Jobs\SyncMedia;
use Illuminate\View\View;
use App\Events\NewProfile;
use Illuminate\Http\Request;
use App\Mail\ReviewNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\ProfileStoreRequest;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function create(Request $request)
    {
        $user = User::find(Auth::id());

        return view('user.profile', compact('user'));
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        //rules
        $rules = [
            'name' => ['required'],
            'prenom' => ['required'],
            'email' => ['required','email'],
            'birthDay' => ['required'],
            'ville' => ['required'],
            'pays' => ['required'],
            'rue' => ['required'],
            'phone' => ['required']
        ];
        if($request->get('password')) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        // validate
        $request->validate($rules);

        $data = [];

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ];

        if($request->get('password')) {
            $data['password'] = bcrypt($request->get('password'));
        }

        //update User
        Auth::user()->update($data);

        $fiels = 
        [
            'prenom' => $request->get('prenom'),
            'user_id' => Auth::user()->id,
            'birthDay' => $request->get('birthDay'),
            'ville' => $request->get('ville'),
            'pays' => $request->get('pays'),
            'rue' => $request->get('rue'),
            'phone' => $request->get('phone'),
        ];

        if(!isset(Auth::user()->profile->id)) {
            //update profile
            Profile::create($fiels);
        } else {
            Auth::user()->profile->update($fiels);
        }

        // flash message
        flashy()->success('operation reussite');

        return back();
    }

    /**
     * @param User $user
     * @return string
     */
    public function show(User $user)
    {
        return view('user.home',compact('user'));
    }

    /**
     * @param ProfileStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProfileStoreRequest $request)
    {
        $profile = Profile::create($request->all());

        Mail::to($profile->author)->send(new ReviewNotification($profile));

        SyncMedia::dispatch($profile);

        event(new NewProfile($profile));

        $request->session()->flash('profile.name', $profile->name);

        return redirect()->route('profile.index');
    }
}
