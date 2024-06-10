<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;

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

    
});
Route::get('/faqs', [FaqController::class, 'indexForUsers'])->name('faqs');



require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);