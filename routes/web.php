<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(ChatController::class)->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/chat', 'index');
        Route::get('/messages', 'fetchMessages');
        Route::post('/messages', 'sendMessage');
        Route::get('/personal-chats', 'personalChat');
        Route::post('/personal-chats', 'sendpersonalMessage');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');