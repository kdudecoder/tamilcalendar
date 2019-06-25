<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->to('https://cashkumar.com', 301);
});


Route::get('/goodworks', function () {
    return redirect()->to('https://cashkumar.com/application/signup?utm_campaign=goodworks&utm_source=poster&utm_medium=conversion', 301);
});
