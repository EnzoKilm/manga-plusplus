<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
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
        $cart = Session::get('cart');
        if(isset($cart)) {
            return view('cart',compact('title', 'cart'));
        } else {
            $cart = array();
            return view('cart',compact('title', 'cart'));
        }
    }

    /**
     * Add an item to the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cartAdd(Request $request, $bookId)
    {
        $book = Book::find($bookId);
        Session::push('cart', $book);
        return redirect()->route('public.cart',compact('title'));
    }

    /**
     * Remove an item from the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cartRemove($idToDelete)
    {
        $cart = Session::get('cart');
        Session::forget('cart');
        $itemIndex = 0;
        foreach($cart as $item) {
            if($item->id != $idToDelete) {
                Session::push('cart', $item);
            }
            $itemIndex += 1;
        }

        return redirect()->route('public.cart');
    }

    /**
     * Make the reservation of the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cartBuy(Request $request)
    {
        Session::forget('cart');

        return redirect()->route('public.cart');
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
                    ->orWhere('id', 'LIKE', "%$search%")
                    ->get();

        return view('search',compact('title', 'search', 'results'));
    }
}
