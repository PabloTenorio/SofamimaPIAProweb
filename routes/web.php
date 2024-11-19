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
Route::get('/catalogo/edit', [App\Http\Controllers\CatalogoController::class, 'edit'])->middleware('auth');
Route::post('/catalogo/update', [App\Http\Controllers\CatalogoController::class, 'update'])->middleware('auth');
Route::get('/catalogo/destroy', [App\Http\Controllers\CatalogoController::class, 'destroy'])->middleware('auth');

/* CATEGORÍA */
Route::get('/categoría/admin', [App\Http\Controllers\CategoríaController::class, 'main'])->name('categoria.main')->middleware('auth');
Route::get('/categoría/create', [App\Http\Controllers\CategoríaController::class, 'create'])->name('categoria.create')->middleware('auth');
Route::post('/categoría/store', [App\Http\Controllers\CategoríaController::class, 'store'])->name('categoria.store')->middleware('auth');
Route::get('/categoría/edit', [App\Http\Controllers\CategoríaController::class, 'edit'])->middleware('auth');
Route::post('/categoría/update', [App\Http\Controllers\CategoríaController::class, 'update'])->middleware('auth');
Route::delete('/categoría/destroy', [App\Http\Controllers\CategoríaController::class, 'destroy'])->middleware('auth');

/* BLOG */
Route::get('/blog/admin', [App\Http\Controllers\BlogController::class, 'main'])->name('blog.main')->middleware('auth');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit', [App\Http\Controllers\BlogController::class, 'edit'])->middleware('auth');
Route::post('/blog/update', [App\Http\Controllers\BlogController::class, 'update'])->middleware('auth');
Route::delete('/blog/destroy', [App\Http\Controllers\BlogController::class, 'destroy'])->middleware('auth');

/* ROLES */
Route::get('/rol/admin', [App\Http\Controllers\RolController::class, 'main'])->name('rol.main')->middleware('auth');
Route::get('/rol/create', [App\Http\Controllers\RolController::class, 'create'])->middleware('auth');
Route::post('/rol/store', [App\Http\Controllers\RolController::class, 'store'])->name('rol.store')->middleware('auth');
Route::get('/rol/edit', [App\Http\Controllers\RolController::class, 'edit'])->middleware('auth');
Route::post('/rol/update', [App\Http\Controllers\RolController::class, 'update'])->middleware('auth');
Route::delete('/rol/destroy', [App\Http\Controllers\RolController::class, 'destroy'])->middleware('auth');

Auth::routes();