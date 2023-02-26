<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternalStakeHolderController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ViewNewsController;
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

Route::get('/', function () { return view('index');});

Route::get('/abouttvet', function(){return view('about');});

Route::get('/contactus', function(){return view('contact');});

Route::get('/examinations', function(){ return view('examinations');});

Route::get('/resources', function(){ return view('resources');});

Route::resource('/viewNews', ViewNewsController::class);

Route::resource('/news', NewsController::class);

Route::get('/tvetcollegetimes', function(){ return view('tvetcollegetimes');});

Route::get('/registration', function(){ return view('registration');});

Route::get('/internalStakeholderList', function(){
    return view('internalStakeholderList',[InternalStakeHolderController::class, 'getInternalStakeHolder']);
});



Route::post('/insertInternalStakeHolder', [InternalStakeHolderController::class, 'insertInternalStakeHolder']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/updateContactUs', [App\Http\Controllers\AdminContactUsController::class, 'index'])->name('admin.adminContact');

Route::get('/updateExamination', [App\Http\Controllers\AdminExaminationController::class, 'index'])->name('admin.adminExamination');

Route::get('/updateAboutTvet', [App\Http\Controllers\AdminAboutTvetController::class, 'index'])->name('admin.adminAboutTvet');

Route::get('/updateResources', [App\Http\Controllers\AdminResourcesController::class, 'index'])->name('admin.adminResources');

Route::get('/updateTvetCollegeTime', [App\Http\Controllers\AdminTvetCollegeTimeController::class, 'index'])->name('admin.adminTvetCollegeTime');
