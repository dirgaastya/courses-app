<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PeriodController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/dashboard',function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources([
        'course' => CourseController::class,
        'form' => FormController::class,
        'period' => PeriodController::class
    ]);
});

require __DIR__.'/auth.php';
