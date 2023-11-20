<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('forgotpassword', function () {
    return view('auth.forgot-password');
})->name('forgotpassword');
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::get('statuspay', function () {
    return view('admin.status');
})->name('statuspay');


Route::get('create/pay', function () {
    return view('admin.add.a-pay');
})->name('a-pay');

Route::get('history', function () {
    return view('admin.history-pay');
})->name('history');

Route::get('patient', function () {
    return view('admin.master.patient');
})->name('patient');



Route::get('edit/patient', function () {
    return view('admin.edit.e-patient');
})->name('e-patient');

Route::get('create/patient', function () {
    return view('admin.add.a-patient');
})->name('a-patient');


Route::get('maintain', function () {
    return view('admin.master.maintain');
})->name('maintain');

Route::get('create/maintain', function () {
    return view('admin.add.a-maintain');
})->name('a-maintain');

Route::get('edit/maintain', function () {
    return view('admin.edit.e-maintain');
})->name('e-maintain');


Route::get('room', function () {
    return view('admin.master.room');
})->name('room');

Route::get('create/room', function () {
    return view('admin.add.a-room');
})->name('a-room');

Route::get('edit/room', function () {
    return view('admin.edit.e-room');
})->name('e-room');
