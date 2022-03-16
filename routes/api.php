<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(ChatController::class)->group(function () {
    // Route::group(['middleware' => 'auth'], function () {
        Route::get('/chat', 'index');
        Route::get('/messages', 'fetchMessages');
        Route::post('/messages', 'sendMessage');
    // });
});