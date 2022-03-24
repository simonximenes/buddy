<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/trainer', function () {
//     return 'Kementerian Sumber Manusia';
// });

Route::middleware('auth')->group(function () {
    Route::get('/backend', [TestController::class, 'backend']);
    Route::get('/trainer', [TestController::class, 'cubaan']);
    Route::get('/dashboard', [TestController::class, 'dashboard']);
    Route::get('/master', [TestController::class, 'master']);
    Route::get('/child1', [TestController::class, 'child']);
    Route::get('/child2', [TestController::class, 'child2']);


    Route::resource('staffs', StaffController::class);
    Route::resource('todos', TodoController::class);
});


Route::get('/welcome', [TestController::class, 'welcome']);


// Route::get('/todos', [TodoController::class, 'index']);
// Route::resource('todos', TodoController::class);
// Route::resource('staffs', StaffController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
