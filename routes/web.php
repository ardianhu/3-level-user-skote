<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\RegisController;
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


//Route::get('/register', [App\Http\Controllers\RegisController::class, 'index'])->name('index')->withoutMiddleware('verified');

Auth::routes([
    'verify' => true
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/dosen', [DosenController::class, 'index']);
});
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
});

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/log', [App\Http\Controllers\HomeController::class, 'log'])->name('log');
Route::get('/reg', [App\Http\Controllers\HomeController::class, 'reg'])->name('reg');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
