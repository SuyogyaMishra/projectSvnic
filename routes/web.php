<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\AdmindasboardController;
use App\Http\Controllers\webContentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\authController;
use App\Models\SchoolInfo;

Route::get('/login_form', function () {
    return view('login');
})->name('login');
Route::get('/admin_login_form', function () {
    return view('admin.admin_login');
})->name('admin.login');

Route::get('/signup-form', function () {
    return view('signup');
});
Route::post('/register', [authController::class, 'register'])->name('auth.register');
Route::post('/login', [authController::class, 'login'])->name('auth.login');
// Admin Dashboard
Route::get('adminlogin', function () {
    return view('admin.admin_login');
});
Route::get('/', [WebContentController::class, 'index'])->name('home');
Route::get('/logout',[authController::class, 'logout'])->name('logout');


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


//for the show addmisiion form
Route::get('showform', function () {
    return view('admission_form');
})->name('showform');
Route::post('/contact', [SchoolInfoController::class, 'contactDetails'])->name('contactInfo');

//route to store admission form data
Route::post('/admissions', [SchoolInfoController::class, 'admissionRecord'])->name('admissions');

Route::middleware('admin')->group(function () {
    Route::get('/admin_dashboard', [AdmindasboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admissions/{id}', [SchoolInfoController::class, 'admissionView'])->name('admissions.view');
    Route::post('/admissionsUpdate', [SchoolInfoController::class, 'admissionUpdate'])->name('admin.updateAdmission');
    Route::get('/addmission.final', [SchoolInfoController::class, 'finalAdmissionstatus'])->name('addmission.final');
    Route::post('/students/{student}/change-status', [AdmindasboardController::class, 'toggleStatus'])->name('students.changeStatus');
    Route::get("admin/content", function () {
        return view('admin.admin_content');
    });
    Route::get("admin/event", [AdmindasboardController::class, 'events'])->name('admin.event');
    Route::get("admin/admmission", [AdmindasboardController::class, 'admission'])->name('admin.ammission');
    Route::get("admin/contact", [AdmindasboardController::class, 'contact'])->name('admin.contact');
    Route::get("admin/school", [AdmindasboardController::class, 'school'])->name('admin.school');
    Route::post('/update-counts', [SchoolInfoController::class, 'InsertData'])->name('updateStudent');
    Route::post('/updateweb', [AdmindasboardController::class, 'updateweb'])->name('updateweb');
    Route::post('/events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/model/{id}/edit', [SchoolInfoController::class, 'edit'])->name('model.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('/contacts/{id}/view', [SchoolInfoController::class, 'showMessage'])->name('contacts.view');
    Route::post('/uploadmark', [AdmindasboardController::class, 'uplodMark'])->name('admin.uploadmark');

});
Route::middleware('auth')->group(function () {
    Route::get('/marks', [SchoolInfoController::class, 'getMarksForm'])->name('marks');
});