<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StatisticalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PurchaseController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'formLogin'])->middleware('checklog');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'formRegister'])->middleware('checklog');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('index');
    Route::get('menu', [HomeController::class, 'menu'])->name('menu');
    Route::get('detail-product/{id}', [HomeController::class, 'detailProduct'])->name('detail.product');
    Route::post('comment-product/{id}', [HomeController::class, 'comment'])->name('comment.product');
    Route::get('my-account', [HomeController::class, 'myAccount'])->name('my-account')->middleware('checkuser');
    Route::post('account-update', [HomeController::class, 'accountUpdate'])->name('account.update')->middleware('checkuser');
    Route::get('my-order', [HomeController::class, 'myOrder'])->name('my-order')->middleware('checkuser');
    Route::get('myOrder-view/{id}', [HomeController::class, 'viewOrder'])->name('myOrder.view')->middleware('checkuser');
    Route::get('my-order/{id}/delete', [HomeController::class, 'myAccDelete'])->name('myOrder.delete')->middleware('checkuser');
    Route::get('my-order/{id}/accept', [HomeController::class, 'accept'])->name('myOrder.accept')->middleware('checkuser');
    Route::get('my-order/{id}/cancel', [HomeController::class, 'cancel'])->name('myOrder.cancel')->middleware('checkuser');

    Route::post('cart-add', [PurchaseController::class, 'cartAdd'])->name('cart.add')->middleware('checkuser');
    Route::get('cart', [PurchaseController::class, 'cartShow'])->name('cart')->middleware('checkuser');
    Route::get('cart-delete/{id}', [PurchaseController::class, 'cartDelete'])->name('cart.delete')->middleware('checkuser');
    Route::post('checkout', [PurchaseController::class, 'checkout'])->name('checkout')->middleware('checkuser');
    Route::post('odder-completed', [PurchaseController::class, 'order'])->name('order.completed')->middleware('checkuser');
    Route::get('congratulations', [PurchaseController::class, 'congratulations'])->name('congratulations');

    Route::get('test-email', [HomeController::class, 'testEmail']);
    
});

Route::prefix('admin')->middleware('checkadmin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');

    Route::resource('products', ProductController::class);
    Route::get('product-trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::get('product-trash/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
    Route::get('product-trash/{id}/forceDelete', [ProductController::class, 'forceDelete'])->name('products.forceDelete');

    Route::resource('categories', CategoryController::class)->except(['show']);

    Route::resource('users', UserController::class);
    Route::get('user-trash', [UserController::class, 'trash'])->name('users.trash');
    Route::get('user-trash/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
    Route::get('user-trash/{id}/forceDelete', [UserController::class, 'forceDelete'])->name('users.forceDelete');

    Route::resource('comments', CommentController::class);

    Route::get('statistics/day', [StatisticalController::class, 'dailyStats'])->name('dailyStats');

    Route::get('orders', [OrderController::class, 'list'])->name('orders.index');
    Route::get('orders/{id}/delete', [OrderController::class, 'delete'])->name('orders.delete');
    Route::get('orders-detail/{id}', [OrderController::class, 'detail'])->name('orders.detail');
    Route::get('orders-detail/{id}/accept', [OrderController::class, 'accept'])->name('orders.accept');
    Route::get('orders-detail/{id}/cancel', [OrderController::class, 'cancel'])->name('orders.cancel');
});
