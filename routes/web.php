<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\AdmindasboardController;
use App\Http\Controllers\webContentController;
use App\Http\Controllers\EventController;

// Admin Dashboard
Route::get('adminlogin', function () {
    return view('admin.admin_login');
});
Route::get('admin_dashboard', [AdmindasboardController::class, 'index'])->name('admin.dashboard');


//webPage Routes


Route::get('/', [webContentController::class, 'index']);



Route::get('earlychild', function () {
    return view('early_child');
});
Route::get('primary', function () {
    return view('primary_school');
});
Route::get('middleschool', function () {
    return view('middle_school');
});
Route::get('seniorschool', function () {
    return view('senior_school');
});
Route::get('highschool', function () {
    return view('high_school');
});

Route::post('/update-counts', [SchoolInfoController::class, 'InsertData'])->name('updateStudent');
Route::post('/updateweb', [AdmindasboardController::class, 'updateweb'])->name('updateweb');



Route::post('/events/store', [EventController::class, 'store'])->name('events.store');
Route::post('/contact', [SchoolInfoController::class, 'contactDetails'])->name('contactInfo');

