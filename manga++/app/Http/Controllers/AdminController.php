<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the administration page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->id() == env('ADMIN_ID')) {
            $userCount = User::count();
            $bookCount = Book::count();
            $mangaCount = Book::where('type','=','Manga')->count();
            $cartoonCount = Book::where('type','=','Bande dessinée')->count();
            return view('admin/index', compact('userCount', 'bookCount', 'mangaCount', 'cartoonCount'));
        } else {
            return view('index');
        }
    }
}
