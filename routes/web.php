<?php

use App\Http\Controllers\Admin\MainController;
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

/*Route::namespace('Admin')->prefix('aliroom')->group(function () {
    Route::get('/', 'MainController@index')->name('admin.index');
});*/

/*Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
});*/

Route::prefix('aliroom')->namespace('Admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
});
