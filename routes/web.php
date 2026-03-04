<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', [UserController::class, 'index'])->name("home");


//User
Route::get('/user/signin', [UserController::class, 'signin'])->name('user-login-page');
Route::post('/user/login', [UserController::class, 'login']);
Route::get('/user/register', [UserController::class, 'register'])->name('user-register-page');
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Contact 
Route::get('/admin/contacts', [ContactController::class, 'contacts'])->name('contacts_list');
Route::get('/admin/contact/new', [ContactController::class, 'new_contact']);
Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit']);
Route::get('/admin/contact/update/{id}/documents', [ContactController::class, 'update']);
Route::post('/admin/store/', [ContactController::class, 'store'])->name('user.store_documents');
Route::put('/admin/update/{id}', [ContactController::class, 'update'])->name('user.store_documents');


//Tags
Route::get('/admin/tags', [TagController::class, 'contacts'])->name('contacts_list');
Route::get('/admin/tags/new', [TagController::class, 'new_contact']);
Route::get('/admin/tags/edit/{id}', [TagController::class, 'edit']);
Route::get('/admin/tags/update/{id}/documents', [TagController::class, 'update']);
Route::post('/admin/tags/store/', [TagController::class, 'store'])->name('user.store_documents');
Route::put('/admin/tags/update/{id}', [TagController::class, 'update'])->name('user.store_documents');
