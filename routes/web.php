<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[HomeController::class, 'index'] );

Route::get('/home',[HomeController::class, 'redirect'] );

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//admin routes
Route::get('/add_doctor_view',[AdminController::class, 'addview'] );

Route::post('/upload_doctor',[AdminController::class, 'upload'] );

Route::get('/showappointment',[AdminController::class, 'showappointment'] );

Route::get('/approve/{id}',[AdminController::class, 'approve'] );

Route::get('/cancel/{id}',[AdminController::class, 'cancel'] );

Route::get('/showdoctor',[AdminController::class, 'showdoctor'] );

Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor'] );

Route::get('/updatedoctor/{id}',[AdminController::class, 'updatedoctor'] );

Route::post('/editdoctor/{id}',[AdminController::class, 'editdoctor'] );

//user routes
Route::post('/appointment',[HomeController::class, 'appointment'] );

Route::get('/myappointment',[HomeController::class, 'myappointment'] );

Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint'] );

