<?php

use App\Http\Controllers\Curd;
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

Route::post('insert', [Curd::class, 'insert']);

Route::get('edit/{id}', [Curd::class, 'edit']);

Route::post('updatedata/{id}', [Curd::class, 'update']);

Route::get('delete/{id}', [Curd::class, 'delete']);