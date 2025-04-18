<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

// home route 
Route::get('/', [homecontroller::class, 'Home'])->name('Homepage');

// Admin Login Routes
Route::get('/login-ipcih-1947', [authcontroller::class, 'login'])->name('login');
Route::post('/login-ipcih-1947', [authcontroller::class, 'loginPost'])->name('login.post');

// Admin Register Routes
Route::get('/signup-ipcih-1947', [authcontroller::class, 'signup'])->name('signup');
Route::post('/signup-ipcih-1947', [authcontroller::class, 'signupPost'])->name('signup.post');

// Admin Panel Routes
Route::get('/dashboard-ipcih', [admincontroller::class, 'adminpage'])->name('admin');

// Total Admin Page ROutes
Route::get('/dashboard-totaladmin', [admincontroller::class, 'totaladmin'])->name('totaladmin');

// Logout Route 
Route::get('/logout', [authcontroller::class, 'logout'])->name('logout');


Route::prefix('admin')->middleware('auth')->group(function () {
    // Existing routes
    Route::delete('/delete-user/{id}', [UserManagementController::class, 'deleteUser'])->name('admin.delete.user');
    
    // Edit and Update Routes
    Route::get('/edit-user/{id}', [UserManagementController::class, 'editUser'])->name('admin.edit.user');
    Route::put('/update-user/{id}', [UserManagementController::class, 'updateUser'])->name('admin.update.user');
});