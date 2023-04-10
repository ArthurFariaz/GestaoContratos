<?php

use App\Http\Controllers\{CompaniesController,ContractsController};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/Contracts');
});
Route::resource('Contracts', ContractsController::class)
    ->except(['destroy']);

Route::resource('Companies', CompaniesController::class)
    ->except(['destroy']);
