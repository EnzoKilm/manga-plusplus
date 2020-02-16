<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Show the subscriptions main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('admin.subscriptions', compact('subscriptions'));
    }

    /**
     * Show the subscriptions add page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add()
    {
        return view('admin.subscriptions.add');
    }

    /**
     * Store the subscription values in the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
    	$subscription = new Subscription();
    	$subscription->name = $request->get('name');
    	$subscription->periodicity = $request->get('periodicity');
    	$subscription->free_count = $request->get('free_count');
    	$subscription->customizable = $request->get('customizable');
    	$subscription->discount = $request->get('discount');
        $subscription->discount_type = $request->get('discount_type');
        $subscription->price = $request->get('price');
    	$subscription->save();
    	return redirect()->route('admin.subscriptions');
    }

    /**
     * Show the subscriptions edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($subscriptionId)
    {
        $subscription = Subscription::find($subscriptionId);
    	return view('admin.subscriptions.edit', compact('subscription'));
    }

    /**
     * Update the subscription values in the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $subscriptionId)
    {
    	$subscription = Subscription::find($subscriptionId);
    	$subscription->name = $request->get('name');
    	$subscription->periodicity = $request->get('periodicity');
    	$subscription->free_count = $request->get('free_count');
    	$subscription->customizable = $request->get('customizable');
    	$subscription->discount = $request->get('discount');
    	$subscription->discount_type = $request->get('discount_type');
    	$subscription->price = $request->get('price');
    	$subscription->save();
        return redirect()->route('admin.subscriptions');
    }

    /**
     * Delete the subscription
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($subscriptionId)
    {
    	$subscription = Subscription::find($subscriptionId);
    	$subscription->delete();
    	return redirect()->route('admin.subscriptions');
    }
}
