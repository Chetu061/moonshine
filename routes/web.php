<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('popup', function () {
    return view('popup');
});
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('profile',[AdminController::class,'profile'])->name('profile');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('setting', [AdminController::class, 'AdminSetting'])->name('setting');


Route::get('user',[UserController::class,'user'])->name('user');
Route::post('user/store',[UserController::class,'store'])->name('user.store');
Route::get('user/index',[UserController::class,'index'])->name('user.index');
Route::get('edit/{userId}',[UserController::class,'edit'])->name('edit');
Route::put('update',[UserController::class,'update']);
Route::get('user/delete/{userId}',[UserController::class,'delete'])->name('user.delete');




Route::get('customerview',[CustomerController::class,'customerview'])->name('customerview');
Route::post('customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('customer/index',[CustomerController::class,'index'])->name('customer.index');






Route::get('supplierview',[SupplierController::class,'supplierview'])->name('supplierview');



