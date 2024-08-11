<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/admin/events', function () {
    return view('admin.events');
})->name('admin.events');

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
})->name('admin.analytics');

Route::get('/admin/notifications', function(){
    return view('admin.notifications');
})->name('admin.notifications');

Route::get('/admin/users', function(){
    return view('admin.users');
})->name('admin.users');

Route::get('/admin/admins', function(){
    return view('admin.admins');
})->name('admin.admins');

Route::get('/admin/settings', function(){
    return view('admin.settings');
})->name('admin.settings');