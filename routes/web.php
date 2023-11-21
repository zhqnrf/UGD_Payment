<?php

use App\Http\Controllers\ChairmainController;
use App\Http\Controllers\MaintainController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UgdPaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post("login", [UserController::class, "login"]);

Route::middleware(['auth.user'])->group(function () {

    Route::get('forgotpassword', function () {
        return view('auth.forgot-password');
    })->name('forgotpassword');

    Route::put('forgotpassword', [UserController::class, "updatePassword"])->name('forgotpassword-put');

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');


    Route::get('statuspay', function () {
        return view('admin.status');
    })->name('statuspay');


    Route::get('create/pay', [UgdPaymentController::class , "create"])->name('a-pay');
    Route::post('create/pay', [UgdPaymentController::class , "store"])->name('pay-post');


    Route::get('edit/pay', function () {
        return view('admin.edit.e-pay');
    })->name('e-pay');

    Route::get('history', function () {
        return view('admin.history-pay');
    })->name('history');

    Route::get('patient', [PatientController::class, "index"])->name('patient');



    Route::get('edit/patient/{id}', [PatientController::class, "edit"])->name('e-patient');
    Route::put('edit/patient/{id}', [PatientController::class, "update"])->name('patient-put');
    Route::delete('patient', [PatientController::class, "delete"])->name('patient-delete');



    Route::get('create/patient', function () {
        return view('admin.add.a-patient');
    })->name('a-patient');

    Route::post("create/pattient", [PatientController::class, "store"])->name('patient-post');


    Route::get('maintain', [MaintainController::class, "index"])->name('maintain');
    Route::post('maintain', [MaintainController::class, "store"])->name('maintain-post');
    Route::delete('maintain', [MaintainController::class, "delete"])->name('maintain-delete');


    Route::get('create/maintain', function () {
        return view('admin.add.a-maintain');
    })->name('a-maintain');

    Route::get('edit/maintain/{id}', [MaintainController::class, "edit"])->name('e-maintain');
    Route::put('edit/maintain/{id}', [MaintainController::class, "update"])->name('maintain-put');



    Route::get('room', [RoomController::class, "index"])->name('room');
    Route::post('room', [RoomController::class, "store"])->name('room-post');


    Route::get('create/room', function () {
        return view('admin.add.a-room');
    })->name('a-room');

    Route::get('edit/room/{id}', [RoomController::class, "edit"])->name('e-room');
    Route::put('edit/room/{id}', [RoomController::class, "update"])->name('room-put');
    Route::delete('room', [RoomController::class, "delete"])->name('room-delete');


    Route::get('chairmain', [ChairmainController::class, "index"])->name('chairmain');
    Route::post('create/chairmain', [ChairmainController::class, "store"])->name('chairmain-post');
    Route::delete('chairmain', [ChairmainController::class, "delete"])->name('chairmain-delete');



    Route::get('edit/chairmain/{id}', [ChairmainController::class, "detail"])->name('e-chairmain');
    Route::put('edit/chairmain/{id}', [ChairmainController::class, "update"])->name('chairmain-put');



    Route::get('create/chairmain', function () {
        return view('admin.add.a-chairman');
    })->name('a-chairmain');

});


