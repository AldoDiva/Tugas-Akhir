<?php
use App\Http\Controllers\UseraddController;
use App\Http\Controllers\SitusaddController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PrayController;
use App\Http\Controllers\FoodController;

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

Route::get('/', function () {
    return view('utama');
})->name('login');

Route::group(['middleware' => 'auth'], function() {
Route::get('user-registration', [UserController::class, 'index']);
Route::post('user-store', [UserController::class, 'userPostRegistration']);
Route::get('dashboard',[UserController::class, 'dashboard']);
Route::get('useradd', [UseraddController::class, 'index'])->name('useradd');
Route::get('situsadd', [SitusaddController::class, 'index'])->name('situsadd');
Route::get('hotelplace', [HotelController::class, 'index'])->name('hotelplace');
Route::get('prayplace', [PrayController::class, 'index'])->name('prayplace');
Route::get('foodplace', [FoodController::class, 'index'])->name('foodplace');
});
//route login
Route::get('user-login', [UserController::class, 'userLoginIndex']);
Route::post('login',  [UserController::class, 'userPostLogin']);
Route::get('logout',  [UserController::class, 'logout']);

//route situs
Route::post('add-situs', [SitusaddController::class, 'store']);
Route::post('update-situs', [SitusaddController::class, 'update']);
Route::post('edit-situs', [SitusaddController::class, 'edit']);
Route::post('delete-situs', [SitusaddController::class, 'destroy']);

//route hotel
Route::post('add-hotel', [HotelController::class, 'store']);
Route::post('update-hotel', [HotelController::class, 'update']);
Route::post('edit-hotel', [HotelController::class, 'edit']);
Route::post('delete-hotel', [HotelController::class, 'destroy']);

//route Pray
Route::post('add-pray', [PrayController::class, 'store']);
Route::post('update-pray', [PrayController::class, 'update']);
Route::post('edit-pray', [PrayController::class, 'edit']);
Route::post('delete-pray', [PrayController::class, 'destroy']);

//route food
Route::post('add-food', [FoodController::class, 'store']);
Route::post('update-food', [FoodController::class, 'update']);
Route::post('edit-food', [FoodController::class, 'edit']);
Route::post('delete-food', [FoodController::class, 'destroy']);


//route main
Route::get('/', [SitusaddController::class, 'show'])->name('/');
Route::get('more/{id}', [SitusaddController::class, 'detail'])->name('more');
Route::get('hotel', [HotelController::class, 'show'])->name('hotel');
Route::get('food', [FoodController::class, 'show'])->name('food');
Route::get('pray', [PrayController::class, 'show'])->name('prays');

//route user function
Route::post('delete-user', [UseraddController::class, 'destroy']);









