<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;




// use App\Repositories\Product\ProductRepositoryInterface;


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

Route::get('/', [HomeController::class, 'index'] );

Route::prefix('shop')->group(function () {
    Route::get('/product/{id}', [ShopController::class, 'show'] );
    Route::post('/product/{id}', [ShopController::class, 'postComment'] );
    Route::get('', [ShopController::class, 'index'] );
});

Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [CartController::class, 'add']);
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('/delete/{rowId}', [CartController::class, 'delete'])->name('cart.remove');
    Route::post('/cart/update-all', [CartController::class, 'updateAll'])->name('cart.updateAll');
});

Route::prefix('checkout')->group(function (){
    Route::get('', [CheckOutController::class, 'index']);
    Route::post('/', [CheckOutController::class, 'addOrder']);

});




