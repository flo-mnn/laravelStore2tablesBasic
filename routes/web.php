<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ImageController;
use App\Models\Animal;
use App\Models\Image;
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
    return view('welcome', [
        'images'=>Image::all(),
        'animals'=>Animal::all()
    ]);
});

Route::resource('animals', AnimalController::class);
Route::resource('images', ImageController::class);
