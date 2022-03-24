<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\InstallationController;
use App\Http\Controllers\API\Report_InstallationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('user/signin', [AuthController::class, 'signin']);
Route::post('user/signup', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('instalasi', [InstallationController::class, 'index']);
    Route::post('instalasi', [InstallationController::class, 'store']);
    Route::get('instalasi/{id}', [InstallationController::class, 'show']);
    Route::post('instalasi/{id}', [InstallationController::class, 'update']);
    Route::delete('instalasi/{id}', [InstallationController::class, 'destroy']);

    Route::get('report_instalasi', [Report_InstallationController::class, 'index']);
    Route::get('report_instalasi/{id}', [Report_InstallationController::class, 'show']);
    Route::post('report_instalasi', [Report_InstallationController::class, 'store']);
    Route::post('report_instalasi/{id}', [Report_InstallationController::class, 'store']);
    Route::delete('report_instalasi/{id}', [Report_InstallationController::class, 'destroy']);
    Route::post('report_instalasi/{id}/uploadVideo', [Report_InstallationController::class, 'uploadVideo']);
    Route::post('report_instalasi/{id}/uploadPhoto', [Report_InstallationController::class, 'uploadFoto']);
    Route::post('report_instalasi/{id}/component', [Report_InstallationController::class, 'componentCheckbox']);
    Route::get('report_instalasi/{id}/component/{comp_id}', [Report_InstallationController::class, 'showComp']);

    Route::post('user/logout', [AuthController::class, 'logout']);
});
