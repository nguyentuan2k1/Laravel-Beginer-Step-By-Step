<?php

use App\Http\Controllers\TodoController;
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
    return redirect('list');
});
Route::controller(TodoController::class)->group(function () {
    Route::get('/list', 'show')->name('list');
    Route::get('/edit/{todo}','edit');
    Route::post('/update/{todo}','update');
    Route::get('/delete/{todo}','delete');
    Route::get('/create','create');
    Route::post('/create','store');


});
