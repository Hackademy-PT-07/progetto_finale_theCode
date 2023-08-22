<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AnnouncementController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::get('/announcements/announcement/{id}', [AnnouncementController::class, 'announcement'])->name('announcement');

});


Route::get('/auth/{provider}/redirect', [AuthController::class, 'render']);
Route::get('/auth/{provider}/callback', [AuthController::class, 'callback']);

