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
        $title = 'Profil';
        return view('profile',compact('title'));
    }

    /**
     * Show the cart page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart()
    {
        $title = 'Panier';
        return view('cart',compact('title'));
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $title = 'Contact';
        return view('contact',compact('title'));
    }
}
