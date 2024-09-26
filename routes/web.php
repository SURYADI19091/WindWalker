<?php

use App\Http\Controllers\OvertimeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', [ContentController::class, 'index'])->name('dashboard');
// Route::get('/report', [ReportController::class, 'index'])->name('report');
// Route::get('/data/production', [ProductionController::class, 'index'])->name('data.production');
// Route::get('/data/company', [CompanyController::class, 'index'])->name('data.company');
// Route::get('/archive', [ArchiveController::class, 'index'])->name('archive');
// Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::get('/department', [DepartementController::class, 'index'])->name('department');

// Route For Employee table
Route::get('/employer', [EmployerController::class, 'index'])->name('employer');
Route::get('/employers/create', [EmployerController::class, 'create'])->name('employers.create');

// Route for overview table
Route::get('/overtime', [OvertimeController::class, 'index'])->name('overtime');
Route::get('/overtime/create', [OvertimeController::class, 'create'])->name('overtime.create');

// Route for setting table
