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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/profil', 'PagesController@profile')->name('profile');
Route::get('/connexion', 'PagesController@login')->name('login');
Route::get('/inscription', 'PagesController@register')->name('register');
Route::get('/deconnexion', 'PagesController@logout')->name('logout');
Route::get('/mdp-oublie', 'PagesController@forgot_password')->name('forgot_password');
Route::get('/panier', 'PagesController@cart')->name('cart');
Route::get('/contact', 'PagesController@contact')->name('contact');

