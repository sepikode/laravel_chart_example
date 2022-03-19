<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/donut', [UserController::class, 'donut'])->name('users.donut');
Route::get('/radial', [UserController::class, 'radial'])->name('users.radial');
Route::get('/polar', [UserController::class, 'polar'])->name('users.polar');
Route::get('/line', [UserController::class, 'line'])->name('users.line');
Route::get('/area', [UserController::class, 'area'])->name('users.area');
Route::get('/bar', [UserController::class, 'bar'])->name('users.bar');
Route::get('/horizontal', [UserController::class, 'horizontal'])->name('users.horizontal');
Route::get('/heatmap', [UserController::class, 'heatmap'])->name('users.heatmap');
Route::get('/radar', [UserController::class, 'radar'])->name('users.radar');
