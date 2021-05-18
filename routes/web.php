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
    return view('welcome');
});

// Route::get('/test/{string}', function ($string) {
//     $strings = [
//         'default-message' => 'this is the default message',
//         'alternate-message' => 'this is the alternate message'
//     ];

//     if(! array_key_exists($string, $strings)) {
//         abort(404, 'looks like we dont know those strings *sadface*');
//     }

//     return view('test2', [
//         'string' => $strings[$string]
//     ]);
// });

Route::get('/test/{post}', 'PostsController@show');

Route::get('test', function(){
    
    return view('test', [
        'message' => request('message')
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});