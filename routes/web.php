<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);

    Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin/faqs');
    Route::get('/admin/faqs/create', [FaqController::class, 'create'])->name('admin/faqs/create');
    Route::post('/admin/faqs/save', [FaqController::class, 'save'])->name('admin/faqs/save');
    Route::get('/admin/faqs/edit/{id}', [FaqController::class, 'edit'])->name('admin/faqs/edit');
    Route::put('/admin/faqs/edit/{id}', [FaqController::class, 'update'])->name('admin/faqs/update');
    Route::get('/admin/faqs/delete/{id}', [FaqController::class, 'delete'])->name('admin/faqs/delete');





    Route::get('/admin/items', [ItemController::class, 'index'])->name('admin/items');
    Route::get('/admin/items/create', [ItemController::class, 'create'])->name('admin/items/create');
    Route::post('/admin/items/save', [ItemController::class, 'save'])->name('admin/items/save');
    Route::get('/admin/items/edit/{id}', [ItemController::class, 'edit'])->name('admin/items/edit');
    Route::put('/admin/items/edit/{id}', [ItemController::class, 'update'])->name('admin/items/update');
    Route::get('/admin/items/delete/{id}', [ItemController::class, 'delete'])->name('admin/items/delete');

    



});
Route::get('/faqs', [FaqController::class, 'indexForUsers'])->name('faqs');
Route::get('/items', [ItemController::class, 'indexForUsers'])->name('items');


require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);