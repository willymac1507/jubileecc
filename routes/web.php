<?php

use App\Http\Controllers\BookingsController;
use App\Models\Booking;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [BookingsController::class, 'show']);

Route::get('/users', function () {
    return Inertia::render('Users', [
        'selectedDate' => '2022-11-23',
    ]);
});
