<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesAndPermissionController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'roles_and_permissions'], function() {
        Route::get('/', [RolesAndPermissionController::class, 'index'])->name('roles_and_permissions');
        Route::post('/store', [RolesAndPermissionController::class, 'store'])->name('roles_and_permissions.store');
    });

    // Route::group(['prefix' => 'company'], function () {

    // });
});
