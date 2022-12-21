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
    return view('home');
});

Route::get('/about', function () {

    $business_info = [
        'address' => 'Via Roma 123',
        'name' => 'Amazon',
        'phone_number' => '123456987654',
        'email_address' => 'amazon@asdf.it'
    ];


    return view('about', compact('business_info'));
});
