<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoiceController;
use App\Http\Controllers\VoiceLogController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/customers-list', [CustomersController::class, 'customer_list_index'])->name('customers_list');
Route::get('/customers-detail/{id}', [CustomersController::class, 'customer_detail_index'])->name('customers_detail');
Route::put('/customers-detail/{id}/update_profile', [CustomersController::class, 'update_profile'])->name('customers_update_profile');
Route::put('/customers-detail/{id}/update_call_result', [CustomersController::class, 'update_call_result'])->name('customers_update_call_result');
Route::put('/customers-detail/{id}/update_simulasi', [CustomersController::class, 'update_simulasi'])->name('customers_update_simulasi');
Route::get('/customers-landing', [CustomersController::class, 'customer_landing_input_index'])->name('customers_landing');
Route::post('/customers-landing', [CustomersController::class, 'store'])->name('customers_store');
Route::post('/call/{id}', [VoiceController::class, 'initiateCall'])->name('initiate_call');
Route::post('/terminate-call/{id}', [VoiceController::class, 'terminateCall'])->name('terminate_call');
Route::get('/call-logs', [VoiceLogController::class, 'getLogs'])->name('get_logs');
Route::get('/call-logs-detail/{sid}', [VoiceLogController::class, 'getLogsDetail'])->name('logs_detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', function () {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');
});

require __DIR__.'/auth.php';

/* Unused Routes */
Route::get('/call-process', [VoiceController::class, 'call_process'])->name('call_process');
Route::view('/calltest', 'call')->name('call_test');
Route::get('/default', function () {
    return view('layouts/default');
});