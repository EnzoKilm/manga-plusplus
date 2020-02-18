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
    public function index()
    {
        $locations = Location::all();
        return view('admin.locations', compact('locations'));
    }

    /**
     * Set the location retrivement state on true
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function validation($locationId)
    {
        $location = Location::find($locationId);
        $location->retiree = true;
        $location->save();
        return back();
    }

    /**
     * Set the location retrivement state on false
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function annulation($locationId)
    {
        $location = Location::find($locationId);
        $location->retiree = false;
        $location->save();
        return back();
    }
}
