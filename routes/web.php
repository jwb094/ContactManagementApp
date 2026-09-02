<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

// Route::get('/register', function () {
//     return view('register');
// });

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


//Tags

//CSV
// Route::get('/admin/csv', function () {
//     return view('csv.csv');
// });


Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile/{id}', [UserController::class, 'edit'])->name('admin.profile');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile/delete/{id}', [UserController::class, 'delete'])->name('admin.profile.delete');



    //Contact 
    Route::prefix('contacts')->group(function () {
    
    Route::get('/', [ContactController::class, 'index'])->name('admin.contacts_list');
    Route::get('/new', [ContactController::class, 'create'])->name('admin.contact.new');
    Route::post('/store/', [ContactController::class, 'store'])->name('admin.contact.store');
    Route::get('/show/{id}', [ContactController::class, 'show'])->name('admin.contact.show');
    Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');;
    Route::get('/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');;
    Route::put('/delete/{id}', [ContactController::class, 'delte'])->name('admin.contact.delete');
    });

  
  Route::prefix('tags')->group(function () {

    Route::get('/', [TagController::class, 'index'])->name('admin.tags');
    Route::get('/new', [TagController::class, 'create'])->name('admin.tags.new');
    Route::get('/edit/{id}', [TagController::class, 'edit'])->name('admin.tags.edit');
    Route::get('/update/{id}', [TagController::class, 'update'])->name('admin.tags.update');
    Route::post('/store/', [TagController::class, 'store'])->name('admin.tags.store');
    Route::put('/update/{id}', [TagController::class, 'update'])->name('admin.tags_list.update');
  });
    
  Route::prefix('csv')->group(function () {
    //CSV
    Route::get('/', [CSVController::class, 'index'])->name('admin.csv.index');
    Route::get('/contact_export', [CSVController::class, 'contact_export'])->name('admin.csv.export_page');
    Route::post('/contact_import', [CSVController::class, 'import'])->name('admin.csv.import');
    Route::post('/csv_export', [CSVController::class, 'export'])->name('admin.csv.export');
  });
});