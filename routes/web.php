<?php

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



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/addDoctor', function () {
    return view('add_doctor');
})->name('addDoctor');

Route::get('/addService', function () {
    return view('add_service');
})->name('addService');

Route::get('/addStaff', function () {
    return view('add_staff');
})->name('addStaff');

Route::get('/admin', function () {
    return view('admin_login');
})->name('admin');

Route::get('/booking', function () {
    return view('booking_appointment');
})->name('booking');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/receptionest', function () {
    return view('receptionest_login');
})->name('receptionest');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');