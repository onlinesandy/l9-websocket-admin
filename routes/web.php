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


use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LockScreenController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ws', function () {
    echo 'hiii, '. Auth::user()->name;
    event (new \App\Events\Onlineusers(Auth::user()));
});

Route::get('/dashboard', function () {
    return view('dashboard' ,['title'=>'Dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::get('/lockscreen', [LockScreenController::class, 'lockscreen'])->name('login.locked');
Route::post('/lockscreen', [LockScreenController::class, 'unlockscreen'])->name('login.unlock');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::get('file-export-excel', [RoleController::class, 'fileExportExcel'])->name('file-export-excel');
    Route::get('file-export-csv', [RoleController::class, 'fileExportCsv'])->name('file-export-csv');

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
