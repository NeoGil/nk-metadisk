<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\FragmentController;
use App\Http\Controllers\Admin\GuideController;
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

Route::prefix('aliroom')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/guides', GuideController::class);
    Route::resource('/fragments', FragmentController::class);
});
