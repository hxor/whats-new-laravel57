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

    // dump('Hello World');

    dd("hello world");

    return view('welcome');
});

Route::get('/users', function () {
    $user = App\User::all();

    dump($user->toArray());

    return view('welcome');
});

Route::post('/post', function () {
    dump(request()->all());
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
