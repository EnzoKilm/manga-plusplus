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
Route::get('/panier/ajouter/{id}', 'PagesController@cartAdd')->name('public.cart.add');
Route::get('/panier/remove/{id}', 'PagesController@cartRemove')->name('public.cart.remove');
Route::get('/panier/reserver/', 'PagesController@cartBuy')->name('public.cart.buy');
Route::get('/panier/reserver/reussi', 'PagesController@success')->name('public.cart.success');
Route::get('/contact', 'PagesController@contact')->name('public.contact');
Route::post('/recherche', 'PagesController@search')->name('public.search');

Route::get('/livre/{id}', 'BooksController@show')->name('public.books');


Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/clients', 'ClientsController@index')->name('admin.clients');
Route::get('/admin/clients/{id}/modifier', 'ClientsController@edit')->name('admin.clients.edit');
Route::post('/admin/clients/{id}/update', 'ClientsController@update')->name('admin.clients.update');
Route::get('/admin/clients/{id}/delete', 'ClientsController@delete')->name('admin.clients.delete');

Route::get('/admin/abonnements', 'SubscriptionsController@index')->name('admin.subscriptions');
Route::get('/admin/abonnements/ajouter', 'SubscriptionsController@add')->name('admin.subscriptions.add');
Route::post('/admin/abonnements/store', 'SubscriptionsController@store')->name('admin.subscriptions.store');
Route::get('/admin/abonnements/{id}/modifier', 'SubscriptionsController@edit')->name('admin.subscriptions.edit');
Route::post('/admin/abonnements/{id}/update', 'SubscriptionsController@update')->name('admin.subscriptions.update');
Route::get('/admin/abonnements/{id}/delete', 'SubscriptionsController@delete')->name('admin.subscriptions.delete');

Route::get('/admin/livres', 'BooksController@index')->name('admin.books');
Route::get('/admin/livres/ajouter', 'BooksController@add')->name('admin.books.add');
Route::post('/admin/livres/store', 'BooksController@store')->name('admin.books.store');
Route::get('/admin/livres/{id}/modifier', 'BooksController@edit')->name('admin.books.edit');
Route::post('/admin/livres/{id}/update', 'BooksController@update')->name('admin.books.update');
Route::get('/admin/livres/{id}/delete', 'BooksController@delete')->name('admin.books.delete');
