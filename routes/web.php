<?php

use App\Http\Controllers\SessionCookiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['result' => []]);
});

Route::get('About', function () {
    return view('About');
});

Route::get('/session-cookie', [
    SessionCookiesController::class,
    'index',
])->name('session-cookie.index');

Route::post('/session-cookie/save', [
    SessionCookiesController::class,
    'saveSession',
])->name('session-cookie.save');

Route::post('/session-cookie/cookie', [
    SessionCookiesController::class,
    'saveCookie',
])->name('session-cookie.cookie');

Route::post('/session-cookie/clear', [
    SessionCookiesController::class,
    'deleteData',
])->name('session-cookie.clear');

