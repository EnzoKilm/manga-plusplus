<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Book;

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
    public function retireeValidation($locationId)
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
    public function retireeAnnulation($locationId)
    {
        $location = Location::find($locationId);
        $location->retiree = false;
        $location->save();
        return back();
    }

    /**
     * Set the location returnment state on true
     * and sets the book availability on true
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rameneeValidation($locationId)
    {
        $location = Location::find($locationId);
        $location->ramenee = true;

        $bookId = $location->book->id;
        $book = Book::find($bookId);
        $book->availability = true;

        $location->save();
        $book->save();
        return back();
    }

    /**
     * Set the location returnment state on false
     * and sets the book availability on false
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rameneeAnnulation($locationId)
    {
        $location = Location::find($locationId);
        $location->ramenee = false;

        $bookId = $location->book->id;
        $book = Book::find($bookId);
        $book->availability = false;

        $location->save();
        $book->save();
        return back();
    }
}
