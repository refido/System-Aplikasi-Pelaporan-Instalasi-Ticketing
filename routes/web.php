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
    return view('login');
});

Route::get('/db', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

//administrator
Route::resource('/viewadmtr', App\Http\Controllers\AdminController::class);

Route::get('/editadmtr', function () {
    return view('administrator.editadministrator');
});

Route::get('/formuser', function () {
    return view('administrator.formuser');
});
//

//edit profile user
Route::get('/eduser', function () {
    return view('edituser');
});
//

//admin
Route::resource('/viewdataladmin', App\Http\Controllers\InstallationController::class);

Route::get('/formdataladmin', function () {
    return view('admin.formdatal');
});

Route::get('/editdataladmin', function () {
    return view('admin.editdatal');
});


Route::get('/detaildataladmin', function () {
    return view('admin.detaildatal');
});

Route::resource('/viewdatingadmin', App\Http\Controllers\TicketingController::class);

// Route::get('/detailtiketadmin/{id}', App\Http\Controllers\TicketingController::class, 'show');


Route::get('/formdatingadmin', function () {
    return view('admin.formdating');
});

Route::get('/detailtiketadmin', function () {
    return view('admin.detailticketingadm');
});

Route::get('/editdatingadmin', function () {
    return view('admin.editdating');
});
//

//teknisi

//Route::resource('/viewdatalteknisi', App\Http\Controllers\ReportInstallationController::class);

Route::get('/viewdatalteknisi', [App\Http\Controllers\InstallationController::class, 'indexteknisi']);


Route::get('/detaildatalteknisi', [App\Http\Controllers\InstallationController::class, 'showteknisi']);

Route::resource('/viewlapinteknisi', App\Http\Controllers\ReportInstallationController::class);

Route::get('/formlapinteknisi', function () {
    return view('teknisi.formlapin');
});

Route::get('/detaillapinteknisi', function () {
    return view('teknisi.detaillapin');
});

Route::get('/viewtiketteknisi', [App\Http\Controllers\TicketingController::class, 'indexteknisi']);


Route::get('/detailtiketteknisi', function () {
    return view('teknisi.detailticketting');
});

Route::get('/formtiketteknisi', function () {
    return view('teknisi.formticketting');
});

Route::resource('/viewriwayat', App\Http\Controllers\TicketSolveController::class);
// Route::get('/viewriwayat', function () {
//     return view('teknisi.riwayat');
// });
//

//programmer

Route::get('/viewlapinprogrammer', [App\Http\Controllers\ReportInstallationController::class, 'indexlapinprog']);

Route::get('/detaillapinprogrammer', function () {
    return view('programmer.detaillapin');
});
//

//manager

Route::get('/viewlapinmanager', [App\Http\Controllers\ReportInstallationController::class, 'indexmnj']);

Route::get('/detaillapinmanager', function () {
    return view('manager.detaillapin');
});

Route::get('/viewlaptickmanager', [App\Http\Controllers\TicketingController::class, 'indexmnj']);

Route::get('/detaillaptickmanager', function () {
    return view('manager.detailticketingmnj');
});

Route::get('/viewgrafik', function () {
    return view('manager.grafik');
});
//

//logout
Route::get('/logout', function () {
    return view('login');
});
//

Route::get('/detaillating', function () {
    return view('detaillating');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/lating', function () {
    return view('laporanticketing');
});