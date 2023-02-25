<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UtilisateurController;

Route::get('/', [UtilisateurController::class, 'index'])->name('utilisateurs.index');
Route::get('/utilisateurs/create', [UtilisateurController::class, 'create'])->name('utilisateurs.create');
Route::post('/utilisateurs', [UtilisateurController::class, 'store'])->name('utilisateurs.store');
Route::get('/utilisateurs/{id}', [UtilisateurController::class, 'show'])->name('utilisateurs.show');
Route::get('/utilisateurs/edit/{id}', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');
Route::get('/utilisateurs/destroy/{id}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy');