<?php

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
    return view('product/index');
});


// Route::resource('Prodect','app\Http\Controllers\ProdectController');
// Route::post('/prodect',[App\Http\Controllers\ProdectController::class, 'addProduct']);
Route::get('prodect','App\Http\Controllers\ProdectController@addProduct');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

