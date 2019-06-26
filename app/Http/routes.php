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


Route::get('/email-link', function () {
    return redirect()->to('https://cashkumar.com/application/signup?utm_campaign=email_link&utm_source=email&utm_medium=conversion', 301);
});

Route::get('/chat-link', function () {
    return redirect()->to('https://cashkumar.com/application/signup?utm_campaign=chat_link&utm_source=chat&utm_medium=conversion', 301);
});

Route::get('/call-link', function () {
    return redirect()->to('https://cashkumar.com/application/signup?utm_campaign=call_link&utm_source=call&utm_medium=conversion', 301);
});

Route::get('/facebook-link', function () {
    return redirect()->to('https://cashkumar.com/application/signup?utm_campaign=facebook_link&utm_source=fb&utm_medium=conversion', 301);
});
