<?php

use App\Http\Controllers\IndexController;
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


Auth::routes();


Route::get('/{any}',[IndexController::class, '__invoke'])->where('any','.*');
// все переадресовывает на вью роутер


//Route::get('/', [IndexController::class, '__invoke'])->where('page', '.*');



