<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard',[GaleriController::class, 'index'])->name('dashboard');
Route::get('/dashboard2',[GaleriController::class, 'index2'])->name('dashboard2');

Route::get('/tambahdata',[GaleriController::class, 'tambahdata'])->name('tambahdata');
Route::post('/tambahdata',[GaleriController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[GaleriController::class, 'insertdata'])->name('insertdata');
Route::get('/tambahdata2',[GaleriController::class, 'tambahdata2'])->name('tambahdata2');
Route::post('/tambahdata2',[GaleriController::class, 'tambahdata2'])->name('tambahdata2');
Route::post('/insertdata2',[GaleriController::class, 'insertdata2'])->name('insertdata2');

Route::get('/tampilkandata/{id}',[GaleriController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[GaleriController::class, 'updatedata'])->name('updatedata');
Route::get('/tampilkandata2/{id}',[GaleriController::class, 'tampilkandata2'])->name('tampilkandata2');
Route::post('/updatedata2/{id}',[GaleriController::class, 'updatedata2'])->name('tampildata2');

Route::get('/hapusdata/{id}',[GaleriController::class, 'hapusdata'])->name('hapusdata');
Route::get('/hapusdata2/{id}',[GaleriController::class, 'hapusdata2'])->name('hapusdata2');

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/', function () {
    return view('landingpage');
});
