<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

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

    /**
     * Show the research page with the result of the research.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $title = 'Résultat de la recherche';
        $search = $request->get('search');

        $results = Book::where('name', 'LIKE', "%$search%")
                    ->orWhere('author', 'LIKE', "%$search%")
                    ->orWhere('tags', 'LIKE', "%$search%")
                    ->orWhere('type', 'LIKE', "%$search%")
                    ->get();

        return view('search',compact('title', 'search', 'results'));
    }
}
