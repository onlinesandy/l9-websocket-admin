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
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\VerificationController;

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
    Route::get('file-export-excel', [RoleController::class, 'fileExportExcel'])->name('roles.file-export-excel');
    Route::get('file-export-csv', [RoleController::class, 'fileExportCsv'])->name('roles.file-export-csv');

    Route::resource('permissions', PermissionController::class);

    Route::resource('users', UserController::class);

    Route::resource('products', ProductController::class);

    Route::resource('commands', CommandController::class);

    Route::resource('profile', ProfileController::class);

    Route::resource('chat', ChatController::class)->middleware(['visitors']);

    Route::resource('friends', FriendController::class);
    Route::get('sendfriendrequest/{id}', [FriendController::class, 'sendfriendrequest'])->name('friends.sendfriendrequest');
    Route::get('acceptfriendrequest/{id}', [FriendController::class, 'acceptfriendrequest'])->name('friends.acceptfriendrequest');
    Route::get('unfriend/{id}', [FriendController::class, 'unfriend'])->name('friends.unfriend');
    Route::get('blockfriend/{id}', [FriendController::class, 'blockfriend'])->name('friends.blockfriend');

    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->name('verification.verify')
        ->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])
        ->name('verification.resend')
        ->middleware(['throttle:6,1']);

    Route::get('test-mail', [MailController::class, 'sendMail'])->name('send.mail');

    Route::get('dropzone', [DropzoneController::class, 'index'])->name('dropzone');
    Route::post('dropzone/store', [DropzoneController::class, 'store'])->name('dropzone.store');
    Route::post('dropzone/delete', [DropzoneController::class, 'fileDestroy'])->name('dropzone.delete');
});

// Route::livewire('chat', 'chat-room')->middleware('auth')->layout('layouts.auth');

require __DIR__ . '/auth.php';
