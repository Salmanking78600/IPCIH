<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

// Home Route - Public route for the homepage
Route::get('/', [HomeController::class, 'Home'])->name('Homepage');

// Admin Login Routes - For login page and login submission
Route::get('/login-ipcih-1947', [AuthController::class, 'login'])->name('login');
Route::post('/login-ipcih-1947', [AuthController::class, 'loginPost'])->name('login.post');

// Admin Register Routes - For signup page and signup submission
Route::get('/signup-ipcih-1947', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup-ipcih-1947', [AuthController::class, 'signupPost'])->name('signup.post');

// Logout Route - For logging out the user
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Panel Routes (protected by auth middleware)
Route::middleware('auth')->prefix('admin')->group(function () {

    // Admin Dashboard Route - Dashboard for authenticated users (Admin)
    Route::get('/dashboard-ipcih', [AdminController::class, 'adminpage'])->name('admin');

    // Total Admin Route - A route for showing total admin information
    Route::get('/dashboard-totaladmin', [AdminController::class, 'totaladmin'])->name('totaladmin');

    // User Management Routes - Manage users in the admin panel
    Route::delete('/delete-user/{id}', [UserManagementController::class, 'deleteUser'])->name('admin.delete.user');
    Route::get('/edit-user/{id}', [UserManagementController::class, 'editUser'])->name('admin.edit.user');
    Route::put('/update-user/{id}', [UserManagementController::class, 'updateUser'])->name('admin.update.user');

    // Program Management Routes - Manage programs in the admin panel
    Route::resource('programs', ProgramController::class)->except(['show']); // Standard resource routes
});

// Route to view all total core programs (public or admin can access based on your needs)
Route::get('/total-core-programs', [ProgramController::class, 'allCorePrograms'])->name('total.core.programs');
Route::get('/programs/delete/{id}', [ProgramController::class, 'destroy'])->name('programs.delete');
Route::get('/programs/update-status/{id}', [ProgramController::class, 'updateStatus'])->name('programs.updateStatus');
