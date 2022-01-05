<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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