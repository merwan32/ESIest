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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Auth::routes(['verify'=> true]);

Route::post('/emploi_de_temps', [App\Http\Controllers\dashboard::class, 'absence'])->name('addabsence');


Route::post('/addnotification', [App\Http\Controllers\admin::class, 'notification'])->name('addnotification')->middleware('admin');
Route::post('/addhotemail', [App\Http\Controllers\admin::class, 'hotemail'])->name('addhotemail')->middleware('admin');
Route::post('/addevent', [App\Http\Controllers\admin::class, 'event'])->name('addevent')->middleware('admin');
Route::post('/addecourses', [App\Http\Controllers\admin::class, 'courses'])->name('addecourses')->middleware('admin');

Route::get('/dashboard', [App\Http\Controllers\dashboard::class, 'profile'])->name('profile');
Route::get('/ranking', [App\Http\Controllers\dashboard::class, 'ranking'])->name('ranking');
Route::get('/ranking personel', [App\Http\Controllers\dashboard::class, 'rankingp'])->name('rankingp');
Route::get('/module', [App\Http\Controllers\dashboard::class, 'module'])->name('module');
Route::get('/cours', [App\Http\Controllers\dashboard::class, 'cours'])->name('cours');
Route::get('/notes', [App\Http\Controllers\dashboard::class, 'notes'])->name('notes');
Route::get('/QA', [App\Http\Controllers\HomeController::class, 'QA'])->name('QA');
Route::get('/emploi_de_temps', [App\Http\Controllers\dashboard::class, 'emploi_de_temps'])->name('emploi');
Route::get('/settings', [App\Http\Controllers\dashboard::class, 'settings'])->name('settings');
Route::get('/dashboard/{id}', [App\Http\Controllers\dashboard::class, 'read'])->name('read');
Route::post('/updateUserName', [App\Http\Controllers\dashboard::class, 'updateUserName'])->name('update-username');
Route::post('/updatePic', [App\Http\Controllers\dashboard::class, 'updatePic'])->name('update-pic');
Route::get('/add', [App\Http\Controllers\dashboard::class, 'add'])->name('add')->middleware('admin');

Route::get('/Contact-us', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::post('/Contact-us', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send.email');



