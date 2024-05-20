<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Middleware\CheckAdminLogin;
// use App\Http\Controllers\Admin\HomeController as ;







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
    Route::put('/', [CheckOutController::class, 'addOrder']);
    Route::get('/result', [CheckOutController::class, 'result']);
});

Route::prefix('account')->group(function (){
    Route::get('login', [AccountController::class, 'login']);
    Route::post('login', [AccountController::class, 'checkLogin']);
    Route::get('logout', [AccountController::class, 'logout']);
});

//admin
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function (){
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}/edit', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('product', [ProductController::class, 'index'])->name('product');
    Route::get('product/{id}', [ProductController::class, 'show']);
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}/edit', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
    
    Route::prefix('login')->group(function () {
        Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');

     
    });

    Route::get('logout', [App\Http\Controllers\Admin\HomeController::class, 'logout']);
});



