<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternalStakeHolderController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ViewNewsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AboutTvetController;
use App\Http\Controllers\GuestAboutTvetController;
use App\Http\Controllers\PublicTvetController;
use App\Http\Controllers\PrivateTvetController;
use App\Http\Controllers\TvetCollegeTimesController;
use App\Http\Controllers\ViewTvetCollegeTimesController;



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



Route::get('/contactus', function(){return view('contact');});
Route::get('/test', function(){return view('testPopup');});


Route::get('/examinations', function(){ return view('examinations');});

Route::get('/resources', function(){ return view('resources');});

//About TVET Pages---------------------------------------------------------------------------------
Route::resource('/abouttvet',GuestAboutTvetController::class);
Route::resource('/adminAbouttvet', AboutTvetController::class);
Route::resource('/publicTvetCollege',PublicTvetController::class);
Route::resource('/privateTvetCollege',PrivateTvetController::class);

//News Pages---------------------------------------------------------------------------------
Route::resource('/viewNews', ViewNewsController::class);
Route::resource('/news', NewsController::class);

//TVET College Time pages---------------------------------------------------------------------------------
Route::resource('/admintvetcollegetimes', TvetCollegeTimesController::class);
Route::resource('/tvetcollegetimes', ViewTvetCollegeTimesController::class);


Route::get('/registration', function(){ return view('registration');});

Route::get('/internalStakeholderList', function(){
    return view('internalStakeholderList',[InternalStakeHolderController::class, 'getInternalStakeHolder']);
});



Route::post('/insertInternalStakeHolder', [InternalStakeHolderController::class, 'insertInternalStakeHolder']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/updateContactUs', [App\Http\Controllers\AdminContactUsController::class, 'index'])->name('admin.adminContact');
Route::get('/updateHomePage', [App\Http\Controllers\AdminHomePageController::class, 'index'])->name('admin.adminHomePage');

Route::get('/updateExamination', [App\Http\Controllers\AdminExaminationController::class, 'index'])->name('admin.adminExamination');

Route::get('/updateAboutTvet', [App\Http\Controllers\AdminAboutTvetController::class, 'index'])->name('admin.adminAboutTvet');

Route::get('/updateResources', [App\Http\Controllers\AdminResourcesController::class, 'index'])->name('admin.adminResources');

Route::get('/updateTvetCollegeTime', [App\Http\Controllers\AdminTvetCollegeTimeController::class, 'index'])->name('admin.adminTvetCollegeTime');

Route::resource('slides', SliderController::class);
Route::resource('footer', FooterController::class);
