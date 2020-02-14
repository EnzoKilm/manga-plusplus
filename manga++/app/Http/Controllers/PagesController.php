<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the user profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('profile');
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

    /**
     * Show the cart page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }
}
