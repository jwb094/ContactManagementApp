<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

// Route::get('/dashboard', function () {
//     return view('contacts.dashboard');
// });

//Homepage
//Route::get('/', [UserController::class, 'index'])->name("home");


//User
//Route::get('/user/signin', [UserController::class, 'signin'])->name('user-login-page');
Route::post('/user/login', [UserController::class, 'login']);
//Route::get('/user/register', [UserController::class, 'register'])->name('user-register-page');
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/profile/{id}', [UserController::class, 'edit']);
Route::put('/admin/update/profile/{id}', [UserController::class, 'update']);


//Contact 
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts_list');
Route::get('/admin/contact/new', [ContactController::class, 'new_contact']);
Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit_contact']);
Route::get('/admin/contact/update/{id}/documents', [ContactController::class, 'update']);
Route::post('/admin/store/', [ContactController::class, 'store'])->name('user.store_documents');
Route::put('/admin/update/{id}', [ContactController::class, 'update'])->name('user.store_documents');


//Tags
Route::get('/admin/tags', [TagController::class, 'index'])->name('contacts_list');
Route::get('/admin/tags/new', [TagController::class, 'create']);
Route::get('/admin/tags/edit/{id}', [TagController::class, 'edit']);
Route::get('/admin/tags/update/{id}/documents', [TagController::class, 'update']);
Route::post('/admin/tags/store/', [TagController::class, 'store'])->name('user.store_documents');
Route::put('/admin/tags/update/{id}', [TagController::class, 'update'])->name('user.store_documents');


//CSV
// Route::get('/admin/csv', function () {
//     return view('csv.csv');
// });
/*Route::get('/admin/csv', [CSVController::class, 'index'])->name('csv_index');
Route::get('/admin/contact_export', [CSVController::class, 'contact_export'])->name('csv_index');
Route::post('/admin/csv_import', [CSVController::class, 'import'])->name('csv_import');
Route::post('/admin/csc_export', [CSVController::class, 'export'])->name('csv_export');
*/