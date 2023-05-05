<?php

use App\Models\userModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\coffeeController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\transactionController;

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

// Route::get('/home', [homeController::class, 'index']);
// Route::get('/coffee', [coffeeController::class, 'index']);
Route::get('/{id}/home', [homeController::class, 'index']);
Route::get('/{id}/transaction', [transactionController::class, 'index']);
Route::get('/{id}/coffee/Signature', [coffeeController::class, 'signature']);
Route::get('/{id}/coffee/Brewed', [coffeeController::class, 'brewed']);
Route::get('/{id}/coffee/Espresso', [coffeeController::class, 'espresso']);
Route::get('/{id}/coffee/Non-Coffee', [coffeeController::class, 'non_coffee']);
Route::get('/{id}/transaction/add', [transactionController::class, 'add'])->name('transaction.add');

