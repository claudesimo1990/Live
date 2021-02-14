<?php

namespace App\Http\Controllers;

use App\notifications;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function show(notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function edit(notifications $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        auth()->user()->unreadNotifications()->update(['read_at' => now()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(notifications $notifications)
    {
        //
    }
}
