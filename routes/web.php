<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroesController;

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
    return view('auth.login');
});

/*
Route::get('/Heroes', function () {
    return view('Heroes.index');
});
Route::get('/Heroes/create',[HeroesController::class,'create']);
*/

Route::resource('Heroes',HeroesController::class);
Auth::routes();


Route::get('/home', [HeroesController::class, 'index'])->name('home');

Route::prefix('auth')->group(function () {

    Route::get('/', [HeroesController::class, 'index'])->name('home');
    
});

    
    


    

    

