<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\HomeController;
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

//navbar Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about',[AboutController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('home');
});

//main-page
Route::get('/motorcycle-overview', [AdminController::class, 'index'])->name('motorcycle-overview');
Route::get('/motorcycle-detail-page/{motorcycle_ID}',[AdminController::class,'detailPage']);
Route::get('/SoftDeleteCar/{motorcycle_ID}',[AdminController::class,'SoftDeleteCar']);

//insert-car
Route::get('/motorcycle-add-page', [AdminController::class, 'addPage'])->name('motorcycle-add-page');
Route::post('/motorcycle-insert',[AdminController::class,'insert_motocycles'])->name('motorcycle-insert');

//Sell
Route::get('/motorcycle-sell-list',[SellController::class,'sellcarDetail'])->name('motorcycle-sell-list');
Route::get('/motorcycle-sell-page/{motorcycle_ID}',[SellController::class,'index']);
//Insert Sell
Route::post('/insert-sell',[AdminController::class,'insert_sell'])->name('insert-sell');

//buy
Route::get('/motorcycle-buy-list',[AdminController::class,'buyCarPage'])->name('motorcycle-buy-list');

//reserve
Route::get('/motorcycle-reserve-list',[AdminController::class,'reserveCarPage'])->name('motorcycle-reserve-list');

//insert-part
Route::get('/motorcycle-part-list', [AdminController::class, 'showPartPage'])->name('motorcycle-part-list');
Route::get('/part-add-page', [AdminController::class, 'addpartPage'])->name('part-add-page');
Route::post('/part-insert',[AdminController::class,'insert_parts'])->name('part-insert');

//DATA-MANAGEMENT-motorcycle
Route::get('/management-add-page', [AdminController::class, 'managementPage'])->name('management-add-page');

Route::get('/getBrand/{id}', [AdminController::class,'getBrand'])->name('getBrand');
Route::get('/getColor/{id}', [AdminController::class,'getColor'])->name('getColor');