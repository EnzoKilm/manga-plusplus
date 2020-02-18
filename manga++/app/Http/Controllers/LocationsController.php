<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationsController extends Controller
{
    /**
     * Show the location retrive page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function retraits()
    {
        $locations = Location::all();
        return view('admin.locations.retraits', compact('locations'));
    }

    /**
     * Show the location loans page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function emprunts()
    {
        $locations = Location::all();
        return view('admin.locations.emprunts', compact('locations'));
    }
}
