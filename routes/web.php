<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [PatientController::class, 'home'])->name('home');
Route::get('/login', [PatientController::class, 'login'])->name('login');
Route::get('/signup', [PatientController::class, 'signup'])->name('signup');
Route::get('/booking', [AppointmentController::class, 'booking'])->name('booking');
Route::get('/admin', [AdminController::class, 'login_Admin'])->name('login_Admin');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/addService', [ServiceController::class, 'Add_service'])->name('Add_service');
Route::get('/addStaff', [StaffController::class, 'staff_login'])->name('staff_login');
Route::get('/doctors', [DoctorController::class, 'Doctors'])->name('Doctors');
Route::get('/addDoctor', [DoctorController::class, 'Add_Doctor'])->name('Add_Doctor');


Route::get('/receptionest', function () {
    return view('receptionest_login');
})->name('receptionest');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');