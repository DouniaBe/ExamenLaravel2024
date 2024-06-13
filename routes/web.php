<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
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


    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/admin/contacts/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::post('/admin/contacts/{id}/respond', [ContactController::class, 'respond'])->name('admin.contacts.respond');

    






});
Route::get('/faqs', [FaqController::class, 'indexForUsers'])->name('faqs');
Route::get('/items', [ItemController::class, 'indexForUsers'])->name('items');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');








Route::prefix('admin')->group(function () {
    Route::get('/users', [UserAdminController::class, 'index'])->name('admin.users.index');
    Route::get('/users/edit/{user}', [UserAdminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/update/{user}', [UserAdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/destroy/{user}', [UserAdminController::class, 'destroy'])->name('admin.users.destroy');
});








require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);