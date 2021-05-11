<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wide;
use App\Http\Controllers\each_country;
use App\Http\Controllers\all;

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

Route::get('all', [all::class, 'index']);
Route::get('other_country', [each_country::class, 'index']);
// Route::get('ww', [wide::class, 'index']);
