<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctors', [MainController::class , 'doctors']) ;
Auth::routes();

// ==============================  User Routes ============================== //
 Route::group(['middleware' => ['auth']], function () {

     Route::post('/appointment_submit', [AppointmentController::class, 'submit']);
     Route::get('/appointment', [AppointmentController::class, 'index'])->name('user.appointment');
     Route::post('/success_app', [AppointmentController::class, 'submit'])->name('success');

 });

// ==============================  Admin Routes ============================== //
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/logged', [AdminController::class, 'adminlogin'])->name('admin.logged');
//Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/admin/appointments', [AdminController::class, 'appointment'])->name('admin.appointments');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/specialities', [AdminController::class, 'specialities'])->name('admin.specialities');
    Route::post('/admin/specialities/create', [AdminController::class, 'addSpeciality'])->name('admin.spec.create');
    Route::get('/admin/doctors', [AdminController::class, 'doctors'])->name('admin.doctors');
    Route::post('/admin/doctors/create', [AdminController::class, 'addDoctor'])->name('admin.doc.create');
//}) ;
