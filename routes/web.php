<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LifespanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UseranimalController;
use App\Http\Controllers\UserlifespanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
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
    'lifespan/trash/{id}',
    [LifespanController::class, 'trash']
)->name('lifespan.trash');

Route::get(
    'lifespan/trashed',
    [LifespanController::class, 'trashed']
)->name('lifespan.trashed');

Route::get(
    'lifespan/restore/{id}',
    [LifespanController::class, 'restore']
)->name('lifespan.restore');


Route::resource('animals', AnimalController::class);
Route::resource('lifespan', LifespanController::class);


});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/user/animals', [UseranimalController::class, 'index'])->name('user.animals.index');
Route::get('/user/lifespan', [UserlifespanController::class, 'index'])->name('user.lifespan.index');



Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

require __DIR__.'/auth.php';
