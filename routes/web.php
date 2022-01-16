<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
//myRoutes
Route::get('students', [ApiController::class,'getAllStudents']);
Route::get('students', 'App\Http\Controllers\ApiController@getAllStudents');
Route::get('students/{id}', [ApiController::class,'getStudents']);
Route::get('students/{id}', 'App\Http\Controllers\ApiController@getStudent');
Route::post('students', [ApiController::class,'createStudents']);
Route::post('students', 'App\Http\Controllers\ApiController@createStudent');
Route::put('students/{id}', [ApiController::class,'updateStudents']);
Route::put('students/{id}', 'App\Http\Controllers\ApiController@updateStudent');
Route::delete('students/{id}', [ApiController::class,'deleteStudents']);
Route::delete('students/{id}', 'App\Http\Controllers\ApiController@deleteStudent');

