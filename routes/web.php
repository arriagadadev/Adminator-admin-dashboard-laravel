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
    return view('dashboard');
});

Route::get('/basic-table', function () {
    return view('basic-table');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/compose', function () {
    return view('compose');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/ui', function () {
    return view('ui');
});

Route::get('/datatable', function () {
    return view('datatable');
});

Route::get('/google-maps', function () {
    return view('google-maps');
});

Route::get('/vector-maps', function () {
    return view('vector-maps');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/500', function () {
    return view('500');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});