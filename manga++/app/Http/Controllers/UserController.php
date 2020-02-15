<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the login page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        $title = 'Connexion';
        return view('login',compact('title'));
    }

    /**
     * Show the register page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        $title = 'Inscription';
        return view('register',compact('title'));
    }
}
