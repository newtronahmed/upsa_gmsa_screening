<?php

use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/checkpoint', function () {
    return view('checkpoint');
})->name('checkpoint');

Route::post('/checkpoint',[CheckpointController::class, 'check'])->name('checkpoint.submit');

Route::get('/testResults/{path_no}', [PagesController::class, 'testResults'])->name('testResults');
Route::get('/phlebotomy/{path_no}', [PagesController::class, 'phlebotomy'])->name('phlebotomy');
Route::get('/serologicalTest/{path_no}', [PagesController::class, 'serologicalTest'])->name('serologicalTest');
Route::get('/bloodGroupings/{path_no}', [PagesController::class, 'bloodGroupings'])->name('bloodGroupings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
