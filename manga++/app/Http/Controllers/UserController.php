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
        return view('login');
    }

    /**
     * Show the register page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Show the logout page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function logout()
    {
        return view('logout');
    }

    /**
     * Show the forgot-password page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function forgot_password()
    {
        return view('forgot_password');
    }
}
