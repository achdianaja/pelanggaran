<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfringementController;
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

// Route::get('/', function () {
//     return view('content.dashboard');
// });

Route::get('/', [DashboardController::class, 'show']);

Route::get('/add', [InfringementController::class, 'create']);
