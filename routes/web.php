<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');
Route::get('/home', [PatientController::class, 'home'])->name('home');
Route::get('/login', [PatientController::class, 'login'])->name('login');

Route::get('/signup', [PatientController::class, 'signup'])->name('signup');
Route::post('/signup', [PatientController::class, 'Handle_signup'])->name('Handle_signup'); 

Route::get('/booking', [AppointmentController::class, 'booking'])->name('booking');
Route::get('/admin', [AdminController::class, 'login_Admin'])->name('login_Admin');
Route::get('/services', [ServiceController::class, 'services'])->name('services');

Route::get('/addService', [ServiceController::class, 'Add_service'])->name('Add_service');
Route::post('/addService', [ServiceController::class, 'Handle_Add_service'])->name('Handle_Add_service');
Route::get('/serviceDashboard', [ServiceController::class, 'serviceDashboard'])->name('serviceDashboard');

Route::get('/receptionest', [StaffController::class, 'staff_login'])->name('staff_login');
Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('dashboard');
Route::get('/staffDashboard', [StaffController::class, 'staffDashboard'])->name('staffDashboard');

Route::get('/doctors', [DoctorController::class, 'Doctors'])->name('Doctors');

Route::get('/addDoctor', [DoctorController::class, 'Add_Doctor'])->name('Add_Doctor');
Route::get('/doctorDashboard', [DoctorController::class, 'doctorDashboard'])->name('doctorDashboard');
Route::post('/handleDoctor', [DoctorController::class, 'Handle_Add_Doctor'])->name('Handle_Add_Doctor');

Route::get('/updateDoctor/{id}', [DoctorController::class, 'Update_Doctor'])->name('Update_Doctor');
Route::post('/updateDoctor/{id}', [DoctorController::class, 'Handle_Update_Doctor'])->name('Handle_Update_Doctor');

Route::post('/deleteDoctor/{id}', [DoctorController::class, 'Delete_Doctor'])->name('Delete_Doctor');

Route::get('/add_staff', [StaffController::class, 'addStaff'])->name('addStaff');
Route::post('/add_staff', [StaffController::class, 'Handle_addStaff'])->name('Handle_addStaff');

Route::get('/updateStaff/{id}', [StaffController::class, 'UpdateStaff'])->name('UpdateStaff');
Route::post('/updateStaff/{id}', [StaffController::class, 'HandleUpdateStaff'])->name('HandleUpdateStaff');
Route::post('/deleteStaff/{id}', [StaffController::class, 'Delete_Staff'])->name('Delete_Staff');

Route::get('/addService', [ServiceController::class, 'Add_service'])->name('Add_service');
Route::post('/addService', [ServiceController::class, 'Handle_Add_service'])->name('Handle_Add_service');


Route::get('/updateService/{id}', [ServiceController::class, 'Update_Service'])->name('Update_Service');
Route::post('/updateService/{id}', [ServiceController::class, 'Handle_Update_Service'])->name('Handle_Update_Service');
Route::post('/deleteService/{id}', [ServiceController::class, 'Delete_Service'])->name('Delete_Service');


