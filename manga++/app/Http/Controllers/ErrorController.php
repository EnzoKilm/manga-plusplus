<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Show the 404 error page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function error404()
    {
        return view('404');
    }

    /**
     * Show the 403 error page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function error403()
    {
        return view('403');
    }
}
