<?php

use App\Http\Controllers\GooleController;
use App\Http\Controllers\HumanController;
use App\Models\Human;
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



Route::get('/register',[HumanController::class,'register']);
Route::post('insert_data',[HumanController::class,'insert_data']);
// login
Route::post('/data_check',[HumanController::class,'data_check']);

// midelware
Route::group(['middleware' =>['auth']],function(){
// index
Route::get('/index',[HumanController::class,'index']);

// dashboard/preference
Route::get('dashboard/preference',[HumanController::class,'preference']);

// preference
Route::post('preference',[HumanController::class,'preferencedata']);

// logout
Route::get('logout',[HumanController::class,'logout']);
});
// midelware end


// google
Route::get('login/google',[GooleController::class, 'redirectToGoogle']);
Route::get('login/google/callback',[GooleController::class, 'handelGoogleCallback']);
