<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
    Route::put('/cart', [CartController::class, 'update'])->name('cart.update');

    // TODO: CRUD ROUTES FOR PAGE CONTROLLER
    // TODO: CRUD ROUTES FOR PRODUCT CONTROLLER
});

require __DIR__.'/auth.php';

// Dynamic page route should always be last to prevent interference in routing with any other part of the system
Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
