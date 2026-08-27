<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CSVController;
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
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/user/logout', [UserController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile/{id}', [UserController::class, 'edit'])->name('admin.profile');
Route::put('/admin/profile/update/{id}', [UserController::class, 'update'])->name('admin.profile.update');
Route::delete('/admin/profile/delete/{id}', [UserController::class, 'delete'])->name('admin.profile.delete');



//Tags

//CSV
// Route::get('/admin/csv', function () {
//     return view('csv.csv');
// });


Route::prefix('admin')->group(function () {
    //Contact 
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts_list');
    Route::get('/contact/new', [ContactController::class, 'new_contact'])->name('admin.contact.new');
    Route::get('/contact/edit/{id}', [ContactController::class, 'edit_contact'])->name('edit_contact');;
    Route::get('/contact/update/{id}/documents', [ContactController::class, 'update']);
    Route::post('/store/', [ContactController::class, 'store'])->name('user.store_documents');
    Route::put('/update/{id}', [ContactController::class, 'update'])->name('user.store_documents');


    Route::get('/tags', [TagController::class, 'index'])->name('admin.tags');
    Route::get('/tags/new', [TagController::class, 'create'])->name('admin.tags.new');
    Route::get('/tags/edit/{id}', [TagController::class, 'edit'])->name('admin.tags.edit');
    Route::get('/tags/update/{id}/documents', [TagController::class, 'update'])->name('admin.tags.update');
    Route::post('/tags/store/', [TagController::class, 'store'])->name('user.store_documents')->name('admin.tags.store');
    Route::put('/tags/update/{id}', [TagController::class, 'update'])->name('user.store_documents')->name('admin.tags_list.update');

    //CSV
    Route::get('/csv', [CSVController::class, 'index'])->name('admin.csv.index');
    Route::get('/csv/contact_export', [CSVController::class, 'contact_export'])->name('admin.csv.index');
    Route::post('/csv/contact_import', [CSVController::class, 'import'])->name('admin.csv.import');
    Route::post('/csv_export', [CSVController::class, 'export'])->name('admin.csv.export');

});