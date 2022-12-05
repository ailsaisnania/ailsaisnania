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

Route::get('/home', function () {
    return view('/home');
});

Route::get('/project', function () {
    return view('project.index');
});

Route::get('/contact', function () {
    return view('/contact');
});
Route::resource('project',
'App\Http\Controllers\ProjectController');

Route::resource('education',
'App\Http\Controllers\EducationController');

Route::resource('about',
'App\Http\Controllers\AboutController');

