<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitusaddController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PrayController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route report
Route::get('report',[ReportController::class, 'index'])->name('report');
Route::get('report-add',[ReportController::class, 'store'])->name('report-add');

//route main
Route::get('situsadd', [SitusaddController::class, 'index'])->name('situsadd');
Route::get('hotelplace', [HotelController::class, 'index'])->name('hotelplace');
Route::get('prayplace', [PrayController::class, 'index'])->name('prayplace');
Route::get('foodplace', [FoodController::class, 'index'])->name('foodplace');

