<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Branch\BranchController;
use App\Http\Controllers\Permission\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('viewLogin');
Route::post('login', [AuthController::class, 'authenticate'])->name('login');

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('branch')->group(function() {
        Route::get('/', [BranchController::class, 'index']);
        Route::get('/add', [BranchController::class, 'create']);
        Route::get('/store', [BranchController::class, 'store']);
    });

    Route::prefix('permission')->group(function() {

        Route::get('/', [PermissionController::class, 'index']);
        Route::get('/add', [PermissionController::class, 'create']);
        Route::post('/store', [PermissionController::class, 'store']);
         Route::post('/change_status', [PermissionController::class, 'changeStatus']);
        Route::get('/get_permission_data', [PermissionController::class, 'fetchData']);

        Route::get('/{permission}/edit', [PermissionController::class, 'edit'])->name('edit_permission');
        Route::post('/{id}/update', [PermissionController::class, 'update']);

        Route::post('/restore', [PermissionController::class, 'restore']);

        Route::post('/validate_inputs', [PermissionController::class, 'validate_inputs']);
        Route::post('/{id}/validate_name',[PermissionController::class, 'validate_name']);
        Route::post('/check_edit', [PermissionController::class, 'checkEdit']);


        Route::match(['get', 'post'], '/delete', [PermissionController::class, 'delete']);
    });
});
