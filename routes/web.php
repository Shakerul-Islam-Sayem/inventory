<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InwardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/products/create', [AdminController::class, 'products']);
Route::get('/admin/dashboard2', [AdminController::class, 'create'])->name('create');
Route::get('/products', [AdminController::class, 'products_show'])->name('products');
Route::get('/products/inward', [InwardController::class, 'create'])->name('admin.inward');
Route::get('/supplier/index', [SupplierController::class, 'index'])->name('admin.supplier.index');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('admin.supplier.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
