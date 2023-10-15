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

Route::get('/', function () {
    return view('layouts.modals');
});

Route::get('/index', function () {
    return view('layouts.index');
});
Route::get('/modals', function () {
    return view('layouts.modals');
});
Route::get('/form_basics', function () {
    return view('layouts.form_basics');
});
Route::get('/form_advenceds', function () {
    return view('layouts.form_advenceds');
});
Route::get('/ui-colors', function () {
    return view('layouts.ui-colors');
});
Route::get('/progress-bar', function () {
    return view('layouts.progress-bar');
});
Route::get('/endsection', function () {
    return view('layouts.endsection');
});
Route::get('/dropdown', function () {
    return view('layouts.dropdown');
});
Route::get('/datatables', function () {
    return view('layouts.datatables');
});
Route::get('/copycontent', function () {
    return view('layouts.copycontent');
});
Route::get('/charts', function () {
    return view('layouts.charts');
});
Route::get('/buttons', function () {
    return view('layouts.buttons');
});
Route::get('/alerts', function () {
    return view('layouts.alerts');
});
Route::get('/404', function () {
    return view('layouts.404');
});
Route::get('simple-tables', function () {
    return view('layouts.simple-tables');
});
Route::get('login', function () {
    return view('layouts.login');
});
Route::get('register', function () {
    return view('layouts.register');
});

Route::get('blank', function () {
    return view('layouts.blank');
});
