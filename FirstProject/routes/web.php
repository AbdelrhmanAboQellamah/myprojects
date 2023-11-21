<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatikController;
use App\Http\Controllers\ComputerController;

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

Route::get('/', [StatikController::class,'index'])->name('home.index');
Route::get('/aboud',[StatikController::class,'aboud'])->name('home.aboud');
Route::get('/contact',[StatikController::class,'contact'])->name('home.contact');

Route::resource('computers',ComputerController::class);


Route::get('/shop/{proda?}/{kinds?}', function ($proda = null ,$kinds = null ) {
    if(isset($proda)){
        if(isset($kinds)){
            return "<h2>{$kinds}</h2>";
        }
        return "<h2>{$proda}</h2>";
    }
    return '<h2>shop</h2>';
});