<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;

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
    return view ('welcome');
});

Route::middleware(['auth','verified'])->group(function(){

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);
    // Admin
    Route::middleware(['checkRole:admin'])->group(function(){
        Route::get('/admin/dashboard',function () {
            return view('master.dashboard');
        })->name('dashboard-admin');
        Route::resources([
            'course' => CourseController::class,
            'form' => FormController::class,
            'period' => PeriodController::class
        ]);
    });

    // User
    Route::middleware(['checkRole:user'])->group(function(){
        Route::get('/dashboard',function () {
            return view('user.dashboard');
        })->name('dashboard');
    });



});



// Route::middleware(['auth', 'verified'])->group(function (){
//     Route::get('/dashboard',function () {
//         return view('master.dashboard');
//     })->name('dashboard');

//     Route::resources([
//         'course' => CourseController::class,
//         'form' => FormController::class,
//         'period' => PeriodController::class
//     ]);
// });

require __DIR__.'/auth.php';
