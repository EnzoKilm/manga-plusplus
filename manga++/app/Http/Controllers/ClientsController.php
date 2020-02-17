<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\User;

class ClientsController extends Controller
{
    /**
     * Show the clients main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('admin.clients', compact('users'));
    }

    /**
     * Show the clients edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($userId)
    {
        $user = User::find($userId);
        $subscriptions = Subscription::all();
    	return view('admin.clients.edit', compact('user', 'subscriptions'));
    }

    /**
     * Update the client values in the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $userId)
    {
    	$user = User::find($userId);
    	$user->firstname = $request->get('firstname');
    	$user->lastname = $request->get('lastname');
    	$user->subscription_id = $request->get('subscription_id');
    	$user->save();
        return redirect()->route('admin.clients');
    }

    /**
     * Delete the user
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($userId)
    {
    	$user = User::find($userId);
    	$user->delete();
    	return redirect()->route('admin.clients');
    }
}
