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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\MailController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/ws', function () {
    echo 'hiii, ' . Auth::user()->name;
    event(new \App\Events\Onlineusers(Auth::user()));
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/lockscreen', [LockScreenController::class, 'lockscreen'])->name('login.locked');
Route::post('/lockscreen', [LockScreenController::class, 'unlockscreen'])->name('login.unlock');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::get('file-export-excel', [RoleController::class, 'fileExportExcel'])->name('file-export-excel');
    Route::get('file-export-csv', [RoleController::class, 'fileExportCsv'])->name('file-export-csv');

    Route::resource('permissions', PermissionController::class);

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);

    Route::resource('commands', CommandController::class);

    Route::resource('profile', ProfileController::class);

    Route::resource('chat', ChatController::class);

    Route::resource('friends', FriendController::class);
    Route::get('sendfriendrequest/{id}', [FriendController::class, 'sendfriendrequest'])->name('sendfriendrequest');
    Route::get('acceptfriendrequest/{id}', [FriendController::class, 'acceptfriendrequest'])->name('acceptfriendrequest');
    Route::get('unfriend/{id}', [FriendController::class, 'unfriend'])->name('unfriend');
    Route::get('blockfriend/{id}', [FriendController::class, 'blockfriend'])->name('unfriend');

    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')
        ->name('verification.verify')
        ->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')
        ->name('verification.resend')
        ->middleware(['throttle:6,1']);

    Route::get('test-mail', [MailController::class, 'sendMail'])->name('send.mail');
});

// Route::livewire('chat', 'chat-room')->middleware('auth')->layout('layouts.auth');

require __DIR__ . '/auth.php';
