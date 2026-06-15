<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserInfoController;

Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/user-info', [UserInfoController::class, 'index'])
    ->middleware('auth')
    ->name('user.info');
