<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
Route::post('/broadcast', [App\Http\Controllers\Chat\PusherController::class, 'broadcast']);
Route::post('/receive', [\App\Http\Controllers\Chat\PusherController::class, 'receive']);
Route::get('/', \App\Http\Controllers\ExampleController::class);
Route::group(['prefix' => 'chat', 'namespace' => 'App\Http\Controllers\Chat'], function () {
    Route::get('/', function () {
        if (auth()->check()) {
            return redirect()->route('chat.authorised');
        }
        return view('chat.index');
    })->name('chat.index');
    Route::post('/', IndexController::class)->name('chat.store');
    Route::get('/authorised', function () {
        return view('chat.authorised');
    })->middleware('auth')->name('chat.authorised');
    Route::post('/authorised', function (Request $request) {
        $data = $request->validate([
            'id' => 'required|string|size:6'
        ]);
        return redirect()->route('chat.chat', ['id' => $data['id']]);
    })->name('chat.authorised.post');
    Route::get('/id{id}', FindController::class)->name('chat.chat');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('chat.index');
    })->name('chat.logout');
    Route::post('/message/{user_to}', MessageController::class)->name('chat.message');
});
