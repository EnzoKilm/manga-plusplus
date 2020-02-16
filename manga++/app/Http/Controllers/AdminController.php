<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $userCount = User::count();
        return view('admin/index', compact('userCount'));
    }

    /**
     * Show the clients page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clients()
    {
        $users = User::all();
        return view('admin/clients', compact('users'));
    }
}
