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
//
// Route::get('#', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/privacy', function () {
    $privacy_policy = config('privacy.privacy_policy');
    return view('privacy',
    ['privacy_policy' => $privacy_policy]
  );
})->name('privacy');
Route::get('/faq', function () {

    $faqs_before = config('faqs.faqs_before');
    $faqs_after = config('faqs.faqs_after');

    return view('faq',
    [ 'faqs_before' => $faqs_before,
      'faqs_after' => $faqs_after
    ]
  );
})->name('faq');
