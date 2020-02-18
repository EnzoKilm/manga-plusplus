<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class MouvementsController extends Controller
{
    /**
     * Show the location retrive page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Location::all();
        return view('admin.mouvements', compact('locations'));
    }
}
