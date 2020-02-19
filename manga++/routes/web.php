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

Route::get('/403', 'ErrorController@error403')->name('error.403');
Route::get('/404', 'ErrorController@error404')->name('error.404');

Route::get('/profil', 'PagesController@profile')->name('public.profile')->middleware('usermiddleware');
Route::get('/panier', 'PagesController@cart')->name('public.cart');
Route::get('/panier/ajouter/{id}', 'PagesController@cartAdd')->name('public.cart.add');
Route::get('/panier/remove/{id}', 'PagesController@cartRemove')->name('public.cart.remove');
Route::get('/panier/reserver/', 'PagesController@cartBuy')->name('public.cart.buy');
Route::get('/panier/reserver/reussi', 'PagesController@success')->name('public.cart.success');
Route::get('/panier/reserver/erreur', 'PagesController@error')->name('public.cart.error');
Route::get('/contact', 'PagesController@contact')->name('public.contact');
Route::post('/contact', 'ErrorController@error404')->name('public.contact');
Route::post('/recherche', 'PagesController@search')->name('public.search');

Route::get('/livre/{id}', 'BooksController@show')->name('public.books');

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('adminmiddleware');
Route::get('/admin/clients', 'ClientsController@index')->name('admin.clients')->middleware('adminmiddleware');
Route::get('/admin/clients/{id}/modifier', 'ClientsController@edit')->name('admin.clients.edit')->middleware('adminmiddleware');
Route::post('/admin/clients/{id}/update', 'ClientsController@update')->name('admin.clients.update')->middleware('adminmiddleware');
Route::get('/admin/clients/{id}/delete', 'ClientsController@delete')->name('admin.clients.delete')->middleware('adminmiddleware');

Route::get('/admin/abonnements', 'SubscriptionsController@index')->name('admin.subscriptions')->middleware('adminmiddleware');
Route::get('/admin/abonnements/ajouter', 'SubscriptionsController@add')->name('admin.subscriptions.add')->middleware('adminmiddleware');
Route::post('/admin/abonnements/store', 'SubscriptionsController@store')->name('admin.subscriptions.store')->middleware('adminmiddleware');
Route::get('/admin/abonnements/{id}/modifier', 'SubscriptionsController@edit')->name('admin.subscriptions.edit')->middleware('adminmiddleware');
Route::post('/admin/abonnements/{id}/update', 'SubscriptionsController@update')->name('admin.subscriptions.update')->middleware('adminmiddleware');
Route::get('/admin/abonnements/{id}/delete', 'SubscriptionsController@delete')->name('admin.subscriptions.delete')->middleware('adminmiddleware');

Route::get('/admin/livres', 'BooksController@index')->name('admin.books')->middleware('adminmiddleware');
Route::get('/admin/livres/ajouter', 'BooksController@add')->name('admin.books.add')->middleware('adminmiddleware');
Route::post('/admin/livres/store', 'BooksController@store')->name('admin.books.store')->middleware('adminmiddleware');
Route::get('/admin/livres/{id}/modifier', 'BooksController@edit')->name('admin.books.edit')->middleware('adminmiddleware');
Route::post('/admin/livres/{id}/update', 'BooksController@update')->name('admin.books.update')->middleware('adminmiddleware');
Route::get('/admin/livres/{id}/delete', 'BooksController@delete')->name('admin.books.delete')->middleware('adminmiddleware');

Route::get('/admin/locations', 'LocationsController@index')->name('admin.locations')->middleware('adminmiddleware');
Route::get('/admin/locations/validation/retiree/{id}', 'LocationsController@retireeValidation')->name('admin.locations.retiree.validation')->middleware('adminmiddleware');
Route::get('/admin/locations/annulation/retiree/{id}', 'LocationsController@retireeAnnulation')->name('admin.locations.retiree.annulation')->middleware('adminmiddleware');
Route::get('/admin/locations/validation/ramenee/{id}', 'LocationsController@rameneeValidation')->name('admin.locations.ramenee.validation')->middleware('adminmiddleware');
Route::get('/admin/locations/annulation/ramenee/{id}', 'LocationsController@rameneeAnnulation')->name('admin.locations.ramenee.annulation')->middleware('adminmiddleware');

Route::get('/admin/mouvements', 'MouvementsController@index')->name('admin.mouvements')->middleware('adminmiddleware');
