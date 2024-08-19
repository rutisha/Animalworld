<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LifespanController;

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
    return view('welcome');
});


Route::get(
    'animals/trash/{id}',
    [AnimalController::class, 'trash']
)->name('animals.trash');

Route::get(
    'animals/trashed',
    [AnimalController::class, 'trashed']
)->name('animals.trashed');

Route::get(
    'animals/restore/{id}',
    [AnimalController::class, 'restore']
)->name('animals.restore');

Route::get(
    '/animals/endangered',
     [AnimalController::class, 'endangered']
)->name('animals.endangered');

Route::resource('animals', AnimalController::class);
Route::resource('lifespan', LifespanController::class);