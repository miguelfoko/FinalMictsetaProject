<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/abouttvet', function()
{
    return view('about');
});

Route::get('/contactus', function()
{
    return view('contact');
});

Route::get('/examinations', function()
{
    return view('examinations');
});

Route::get('/resources', function()
{
    return view('resources');
});

Route::get('/news', function()
{
    return view('news');
});

Route::get('/tvetcollegetimes', function()
{
    return view('tvetcollegetimes');
});
