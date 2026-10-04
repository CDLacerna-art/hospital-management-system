<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

Route::get('/', [HospitalController::class, 'home'])->name('home');
Route::get('/department', [HospitalController::class, 'department'])->name('department');
Route::get('/doctor', [HospitalController::class, 'doctor'])->name('doctor');
Route::get('/nurse', [HospitalController::class, 'nurse'])->name('nurse');
Route::get('/monitor-hospital', [HospitalController::class, 'monitorHospital'])
    ->name('monitor.hospital');

Route::get('/login', [HospitalController::class, 'login'])->name('login');
Route::get('/register', [HospitalController::class, 'register'])->name('register');
Route::get('/information', [HospitalController::class, 'information'])
    ->name('information');