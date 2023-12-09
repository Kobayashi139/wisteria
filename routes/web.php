<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SceneController;

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

Route::get('/', [SceneController::class, 'index'])->name('scenes.index');
Route::get('/scenes/{scenes}', [SceneController::class, 'show']);

Route::get('/scenes/create', [SceneController::class, 'cleate']);

Route::post('/create', [SceneController::class, 'store']);
