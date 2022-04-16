<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tui4bController;

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

Route::get('/', [Tui4bController::class, 'index']);

Route::get('/auth', [Tui4bController::class,'check']);
Route::post('/auth', [Tui4bController::class,'checkUser']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
