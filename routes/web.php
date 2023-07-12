<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;

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

Route::get('/', 
    [ProductController::class,'index']
);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', 
    [ProductController::class,'products']
);


Route::get('/single-product', function () {
    return view('single-product');
});



Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/users', function () {
    return view('users/index');

});
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\adminController;

    Route::prefix('/admin')->group(function(){

    Route::get('/admin', 
        [adminController::class, 'admin'])->name('admin');

    Route::get('/product', 
        [adminController::class, 'product'])->name('produk.product'); 

    Route::get('/create', 
        [adminController::class, 'create'])->name('produk.create');

    Route::post('/product/store', 
        [adminController::class, 'store'])->name('produk.store');

    Route::get('/product/edit/{id}', 
        [adminController::class, 'edit'])->name('produk.edit'); 

    Route::put('/product/update/{id}', 
        [adminController::class, 'update'])->name('produk.update');

    Route::delete('/product/destroy/{product}', 
        [adminController::class, 'destroy'])->name('produk.destroy');

    Route::get('/customers', 
        [adminController::class, 'customers'])->name('pelanggan.customers');

    Route::get('/create2', 
        [adminController::class, 'create2'])->name('pelanggan.create'); 

    Route::post('/customers/store', 
        [adminController::class, 'store2'])->name('pelanggan.store2');

    Route::get('/customers/edit/{id}', 
        [adminController::class, 'editCustomer'])->name('pelanggan.edit2'); 

    Route::put('/customers/update/{id}', 
        [adminController::class, 'updateCustomer'])->name('pelanggan.update2');

    Route::delete('/customers/destroy/{customer}', 
        [adminController::class, 'destroyCustomer'])->name('pelanggan.destroy');

    Route::get('/orders', 
        [adminController::class, 'orders'])->name('orders');


        });
