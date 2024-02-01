<?php

use App\Livewire\Auth\Providers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController\HomeController;
use App\Http\Controllers\UserController\DashBoardController;
use App\Livewire\UserFormInfo;
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

Route::get('/', [HomeController::class, 'index'])->name('index');


// Google Authentication Routes
Route::get('/auth/{provider}/redirect', [Providers::class, 'redirectToGoogle']);
Route::get('/auth/{provider}/callback', [Providers::class, 'handleGoogleCallback']);

// USER ROUTES
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/submit_user_info', [UserFormInfo::class, 'submit_user_info'])->name('post_request_user_info');
});
