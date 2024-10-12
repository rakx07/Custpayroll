<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CreateEmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\GovDeductionController;

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes (Protected by 'auth' and 'is_admin' middleware)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Employee creation for Admin
    Route::get('/admin/employee/create', [CreateEmployeeController::class, 'create'])->name('employee.create');
    Route::post('/admin/employee/store', [CreateEmployeeController::class, 'store'])->name('employee.store');
});

// Employee Routes (Protected by 'auth' and 'is_employee' middleware)
Route::middleware(['auth', 'is_employee'])->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
});

// General Employee Routes
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');

// Payroll Routes
Route::get('/payroll', [PayrollController::class, 'index'])->name('payroll.index');

// Government Deduction Routes
Route::get('/sss', [GovDeductionController::class, 'sss'])->name('sss.index');
Route::get('/tax', [GovDeductionController::class, 'tax'])->name('tax.index');
Route::get('/hdmf', [GovDeductionController::class, 'hdmf'])->name('hdmf.index');
Route::get('/philhealth', [GovDeductionController::class, 'philhealth'])->name('philhealth.index');
