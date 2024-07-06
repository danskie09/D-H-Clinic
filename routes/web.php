<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing');
});



Route::get('/dashboard', [UserController::class, 'userDash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');
Route::get('admin/add_doctor_view', [AdminController::class, 'addview'])->name('add_Doctor_View');
Route::get('admin/showDoctor', [AdminController::class, 'showDoctor'])->name('show.doctor');
Route::get('admin/DeleteDoctor/{id}', [AdminController::class, 'deleteDoctor'])->name('doctor.delete');
Route::post('admin/upload_doctor', [AdminController::class, 'upload'])->name('upload');
Route::get('/appointments',[AdminController::class,'all_appointments'])->name('view.appointments');

Route::get('/user_appointments/{id}',[AdminController::class,'showPatientAppointment'])->name('patients.appointment');

Route::get('/appointment_search',[AdminController::class,'search'])->name('appointments.search');
Route::get('/patient_search',[AdminController::class,'searchPatient'])->name('patient.search');
Route::get('/approved/edit/{id}',[AdminController::class,'edit'])->name('appointment.edit');
Route::put('/approved/confirm/{id}',[AdminController::class,'approved'])->name('appointment.approved');
Route::get('/cancelled/{id}',[AdminController::class,'cancelled'])->name('appointment.cancel');
Route::get('/patientRecords',[AdminController::class,'patientRecords'])->name('patient.record');
Route::get('/adminTodayAppointments',[AdminController::class,'adminToday'])->name('admin.today');
Route::get('/userAppointment',[UserController::class,'Appointments'])->name('appointment');
Route::post('/user_Add_Appointment',[UserController::class,'addAppointment'])->name('add.appointment');
Route::get('/my_Appointment',[UserController::class,'myAppointments'])->name('user.appointment');
Route::get('/my_Appointment_today',[UserController::class,'todayAppointments'])->name('today.appointment');
Route::get('/cancel_appointment/{id}',[UserController::class,'cancel_appointment'])->name('myAppointment.delete');
Route::get('/my_doctors',[UserController::class,'doctors'])->name('doctor');