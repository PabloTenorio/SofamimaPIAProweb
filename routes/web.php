<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* MAIN */
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog']);
Route::get('/catalogo', [App\Http\Controllers\MainController::class, 'catalogo']);
Route::get('/admin', [App\Http\Controllers\MainController::class, 'admin'])->middleware('auth');
Route::get('/admin/users', [App\Http\Controllers\MainController::class, 'users'])->middleware('auth');

/* CATÁLOGO */
Route::get('/catalogo/admin', [App\Http\Controllers\CatalogoController::class, 'main'])->name('catalogo.main')->middleware('auth');
Route::get('/catalogo/create', [App\Http\Controllers\CatalogoController::class, 'create'])->name('catalogo.create')->middleware('auth');
Route::post('/catalogo/store', [App\Http\Controllers\CatalogoController::class, 'store'])->name('catalogo.store')->middleware('auth');
Route::get('/catalogo/edit/{id}', [App\Http\Controllers\CatalogoController::class, 'edit'])->name('catalogo.edit')->middleware('auth');
Route::post('/catalogo/update/{id}', [App\Http\Controllers\CatalogoController::class, 'update'])->name('catalogo.update')->middleware('auth');
Route::delete('/catalogo/destroy/{id}', [App\Http\Controllers\CatalogoController::class, 'destroy'])->name('catalogo.destroy')->middleware('auth');

/* CATEGORÍA */
Route::get('/categoría/admin', [App\Http\Controllers\CategoríaController::class, 'main'])->name('categoria.main')->middleware('auth');
Route::get('/categoría/create', [App\Http\Controllers\CategoríaController::class, 'create'])->name('categoria.create')->middleware('auth');
Route::post('/categoría/store', [App\Http\Controllers\CategoríaController::class, 'store'])->name('categoria.store')->middleware('auth');
Route::get('/categoría/edit/{id}', [App\Http\Controllers\CategoríaController::class, 'edit'])->name('categoria.edit')->middleware('auth');
Route::post('/categoría/update/{id}', [App\Http\Controllers\CategoríaController::class, 'update'])->name('categoria.update')->middleware('auth');
Route::delete('/categoría/destroy/{id}', [App\Http\Controllers\CategoríaController::class, 'destroy'])->name('categoria.destroy')->middleware('auth');

/* BLOG */
Route::get('/blog/admin', [App\Http\Controllers\BlogController::class, 'main'])->name('blog.main')->middleware('auth');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::delete('/blog/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

/* ROLES */
Route::get('/rol/admin', [App\Http\Controllers\RolController::class, 'main'])->name('rol.main')->middleware('auth');
Route::get('/rol/create', [App\Http\Controllers\RolController::class, 'create'])->middleware('auth');
Route::post('/rol/store', [App\Http\Controllers\RolController::class, 'store'])->name('rol.store')->middleware('auth');
Route::get('/rol/edit/{id}', [App\Http\Controllers\RolController::class, 'edit'])->name('rol.edit')->middleware('auth');
Route::post('/rol/update/{id}', [App\Http\Controllers\RolController::class, 'update'])->name('rol.update')->middleware('auth');
Route::delete('/rol/destroy/{id}', [App\Http\Controllers\RolController::class, 'destroy'])->name('rol.destroy')->middleware('auth');

Auth::routes();