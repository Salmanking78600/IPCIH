<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserManagementController;
use App\Models\Program;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [HomeController::class, 'Home'])->name('Homepage');

// Admin Login Routes
Route::get('/login-ipcih-1947', [AuthController::class, 'login'])->name('login');
Route::post('/login-ipcih-1947', [AuthController::class, 'loginPost'])->name('login.post');

// Admin Register Routes
Route::get('/signup-ipcih-1947', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup-ipcih-1947', [AuthController::class, 'signupPost'])->name('signup.post');

// Logout Route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Panel Routes (protected by auth middleware)
Route::middleware('auth')->prefix('admin')->group(function () {

    // Admin Dashboard Route (accessible only after login)
    Route::get('/dashboard-ipcih', [AdminController::class, 'adminpage'])->name('admin');

    // Total Admin Route (accessible only after login)
    Route::get('/dashboard-totaladmin', [AdminController::class, 'totaladmin'])->name('totaladmin');

    // User Management Routes (only for authenticated users)
    Route::delete('/delete-user/{id}', [UserManagementController::class, 'deleteUser'])->name('admin.delete.user');
    Route::get('/edit-user/{id}', [UserManagementController::class, 'editUser'])->name('admin.edit.user');
    Route::put('/update-user/{id}', [UserManagementController::class, 'updateUser'])->name('admin.update.user');

    // Program Management Routes (only for authenticated users)
    Route::get('/programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');
});
// total core programs 
Route::get('/total-core-programs', [ProgramController::class, 'allCorePrograms'])->name('total.core.programs');


