<?php

// use App\Http\Controllers\ProfileController;
use App\http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




Route::get('/',function(){
    return Inertia::render('Homepage');
});

Route::get('/products',[ProductController::class, 'index'])->name('product.index');

Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');

Route::post("/product/store",[ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}',[ProductController::class, 'show'])->name('product.show');


require __DIR__.'/auth.php';
