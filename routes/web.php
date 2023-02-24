<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;

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

// Route::get('/main-page', function () {
//     return view('user.main-page');
// })->name('main-page');

Route::get('/main-page', [UserController::class, 'index'])->name('main-page');
Route::get('/motorcycle-detail/{motorcycle_ID}', [UserController::class, 'MotorcycleDetailPage']);
Route::get('/motorcycle-reserve/{motorcycle_ID}', [UserController::class, 'MotorcycleReservePage']);
Route::get('/motorcycle-reserve-payment/{motorcycle_ID}', [UserController::class, 'ReservePaymentPage']);
Route::post('/insert-payment', [UserController::class, 'insert_payment'])->name('insert-payment');


Route::get('/about', [AboutController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('home');

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('adminhome');
        })->name('dashboard');

        //main-page
        Route::get('/motorcycle-overview', [AdminController::class, 'index'])->name('motorcycle-overview');
        Route::get('/motorcycle-detail-page/{motorcycle_ID}', [AdminController::class, 'detailPage']);
        Route::get('/SoftDeleteCar/{motorcycle_ID}', [AdminController::class, 'SoftDeleteCar']);

        //insert-car
        Route::get('/motorcycle-add-page', [AdminController::class, 'addPage'])->name('motorcycle-add-page');
        Route::post('/motorcycle-insert', [AdminController::class, 'insert_motocycles'])->name('motorcycle-insert');

        //Sell
        Route::get('/motorcycle-sell-list', [SellController::class, 'sellcarDetail'])->name('motorcycle-sell-list');
        Route::get('/motorcycle-sell-page/{motorcycle_ID}', [SellController::class, 'index']);
        Route::get('/reserve-sell-page/{id}', [SellController::class, 'reserve_sell']);

        //Insert Sell
        Route::post('/insert-sell', [AdminController::class, 'insert_sell'])->name('insert-sell');

        //buy
        Route::get('/motorcycle-buy-list', [AdminController::class, 'buyCarPage'])->name('motorcycle-buy-list');

        //reserve
        Route::get('/motorcycle-reserve-list', [AdminController::class, 'reserveCarPage'])->name('motorcycle-reserve-list');

        //insert-part
        Route::get('/motorcycle-part-list', [AdminController::class, 'showPartPage'])->name('motorcycle-part-list');
        Route::get('/part-add-page', [AdminController::class, 'addpartPage'])->name('part-add-page');
        Route::post('/part-insert', [AdminController::class, 'insert_parts'])->name('part-insert');


        //DATA-MANAGEMENT-motorcycle
        Route::get('/management-add-page', [AdminController::class, 'managementPage'])->name('management-add-page');
        Route::get('/management-add-model', [AdminController::class, 'managementModelPage'])->name('management-add-model');
        Route::get('/management-add-color', [AdminController::class, 'managementColorPage'])->name('management-add-color');
        //MANAGEMENT-Brands
        Route::post('/motorcycle-brand-insert', [AdminController::class, 'insert_brand'])->name('motorcycle-brand-insert');
        Route::get('/SoftDelete-brand/{id}', [AdminController::class, 'SoftDelete_brand'])->name('SoftDelete-brand');

        //MANAGEMENT-Models
        Route::post('/motorcycle-model-insert', [AdminController::class, 'insert_model'])->name('motorcycle-model-insert');
        Route::get('/SoftDelete-model/{id}', [AdminController::class, 'SoftDelete_model'])->name('SoftDelete-model');
        //MANAGEMENT-Color
        Route::post('/motorcycle-color-insert', [AdminController::class, 'insert_color'])->name('motorcycle-color-insert');
        Route::get('/SoftDelete-color/{id}', [AdminController::class, 'SoftDelete_color'])->name('SoftDelete-color');

        //MANAGEMENT-permission
        Route::get('/management-permission', [AdminController::class, 'permissionPage'])->name('management-permission');
        Route::put('/permission-change', [AdminController::class, 'permission_change'])->name('permission-change');

        Route::get('/getBrand/{id}', [AdminController::class, 'getBrand'])->name('getBrand');
        Route::get('/getColor/{id}', [AdminController::class, 'getColor'])->name('getColor');
    });
});
