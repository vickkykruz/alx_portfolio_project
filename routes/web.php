<?php

//! Import the classes required for the operation.
use App\Http\Livewire\Auth\Providers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController\HomeController;
use App\Http\Controllers\UserController\DashBoardController;
use App\Http\Livewire\UserFormInfo;
use App\Http\Livewire\VerifyUserContant;
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

// Index Route.
Route::get('/', [HomeController::class, 'index'])->name('index');


// Provider Routes
Route::get('/auth/{provider}/redirect', [Providers::class, 'redirectToGoogle']);
Route::get('/auth/{provider}/callback', [Providers::class, 'handleGoogleCallback']);

/**
 * This section is the authenticated user route. This is covered by the
 *  middleware indicating that any user using must be verificated.
 */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/submit_user_info', [UserFormInfo::class, 'submit_user_info'])->name('post_request_user_info');
    Route::post('/dashboard/submit_contact_status', [VerifyUserContant::class, 'saveDetails'])->name('post_request_contact_verify_status');
});
