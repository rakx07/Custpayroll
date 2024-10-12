<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'is_employee'])->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
});

// routes/web.php
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/payroll', [PayrollController::class, 'index'])->name('payroll.index');
// Government deductions
Route::get('/sss', [GovDeductionController::class, 'sss'])->name('sss.index');
Route::get('/tax', [GovDeductionController::class, 'tax'])->name('tax.index');
Route::get('/hdmf', [GovDeductionController::class, 'hdmf'])->name('hdmf.index');
Route::get('/philhealth', [GovDeductionController::class, 'philhealth'])->name('philhealth.index');