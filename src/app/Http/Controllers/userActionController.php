<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class userActionController extends Controller
{
    public function reservations()
    {
        $reservations = Auth::user()->reservations;

        return view('user.reservations', compact('reservations'));
    }

    public function travels()
    {
        $travels = Auth()->user()->posts()->where('categorie_id',2)->get();


        return view('user.travels', compact('travels'));
    }

    public function packs()
    {
        $packs = Auth()->user()->posts()->where('categorie_id',1)->get();


        return view('user.packs', compact('packs'));
    }

    public function factures()
    {
        return view('user.factures');
    }

    public function demandes()
    {
        return view('user.demandes');
    }
}
