<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::auth();

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/profil', 'PagesController@profile')->name('public.profile');
Route::get('/panier', 'PagesController@cart')->name('public.cart');
Route::get('/contact', 'PagesController@contact')->name('public.contact');

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/clients', 'AdminController@clients')->name('admin.clients');
Route::get('/admin/abonnements', 'SubscriptionController@index')->name('admin.subscriptions');
Route::get('/admin/abonnements/ajouter', 'SubscriptionController@add')->name('admin.subscriptions.add');
Route::post('/admin/abonnements/store', 'SubscriptionController@store')->name('admin.subscriptions.store');
Route::get('/admin/abonnements/{id}/modifier', 'SubscriptionController@edit')->name('admin.subscriptions.edit');
Route::put('/admin/abonnements/{id}/update', 'SubscriptionController@update')->name('admin.subscriptions.update');
Route::get('/admin/abonnements/{id}/delete', 'SubscriptionController@delete')->name('admin.subscriptions.delete');
