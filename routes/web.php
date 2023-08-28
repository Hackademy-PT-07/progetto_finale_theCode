<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RevisorController;

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
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::middleware('auth')->group(function () {
    
    // Rotta filtraggio per genere
    Route::get('/announcements/genre/{category}', [AnnouncementController::class, 'categoryPage'])->name('announcements.genre');

    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::get('/announcements/announcement/{id}', [AnnouncementController::class, 'announcement'])->name('announcement');
    Route::get('/area-personale', [AnnouncementController::class, 'personalArea'])->name('personalArea');
    Route::get('/work/revisor', [RevisorController::class, 'worRequest'])->name('work.revisor');
    Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');

});

// Login from social
Route::get('/auth/{provider}/redirect', [AuthController::class, 'render']);
Route::get('/auth/{provider}/callback', [AuthController::class, 'callback']);

// Revisor
Route::middleware('isRevisor')->group(function () {

    Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
    Route::get('/revisor/chronology', [RevisorController::class, 'chronology'])->name('revisor.chronology');

});