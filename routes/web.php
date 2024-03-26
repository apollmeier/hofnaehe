<?php

use App\Http\Controllers\User\LocationController;
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
    return view('welcome');
});

Route::prefix('user')->middleware(['verified'])->group(function () {
    Route::get('/', function () {
        echo 'USER AREA';
    });

    Route::resource('locations', LocationController::class);
});
