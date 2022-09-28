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
use Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ws', function () {
    echo 'hiii, '. Auth::user()->name;
    event (new \App\Events\Onlineusers(Auth::user()));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/lockscreen', [AuthenticatedSessionController::class, 'locked'])->middleware('auth.lock')->name('login.locked');
Route::post('/lockscreen', [AuthenticatedSessionController::class, 'unlocked'])->name('login.unlock');


require __DIR__.'/auth.php';
