<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InwardController;
use App\Http\Controllers\OutwardController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('index');
// Route::get('/products', [ProductsController::class, 'products_show'])->name('products-list');
// Route::get('/products/create', [ProductsController::class, 'products'])->name('products-create');
// Route::get('/products/inward', [InwardController::class, 'create'])->name('admin.inward');
Route::resource('category', CategoryController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('roles', RoleController::class);
Route::resource('product', ProductsController::class);
Route::resource('inward', InwardController::class);
Route::post('/create', [InwardController::class, 'submit'])->name('inward.submit');
Route::resource('outward', OutwardController::class);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
// Route::get('inward2',[InwardController::class, 'submit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware('auth')->group(function () {
    Route::get('/profile2', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile2', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile2', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
