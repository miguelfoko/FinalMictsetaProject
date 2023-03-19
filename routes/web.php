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
use App\Http\Controllers\CollegeCourseTypesController;
use App\Http\Controllers\ViewCollegeCourseTypesController;
use App\Http\Controllers\CourseTypesController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\ViewSuccessStoriesController;
use App\Http\Controllers\CollegeCalendarController;
use App\Http\Controllers\ViewCollegeCalendarController;
use App\Http\Controllers\CareerGuidanceController;
use App\Http\Controllers\ViewCareerGuidanceController;
use App\Http\Controllers\ViewExamResourcesController;
use App\Http\Controllers\IcassTrainingVideosController;
use App\Http\Controllers\ViewIcassTrainingVideosController;
use App\Http\Controllers\ViewCommunityCollegesController;
use App\Http\Controllers\ViewSetasController;
use App\Http\Controllers\ViewExamTrainingVideosController;






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

//Examination pages
Route::get('/updateExamination', [App\Http\Controllers\AdminExaminationController::class, 'index'])->name('admin.adminExamination');
Route::get('/examinations', function(){ return view('examinations');});
Route::resource('/icasstrainingvideos',IcassTrainingVideosController::class);
Route::resource('/viewexamresources',ViewExamResourcesController::class);
Route::resource('/viewexamtrainingvideos',ViewExamTrainingVideosController::class);
Route::resource('/viewicasstrainingvideos',ViewIcassTrainingVideosController::class);




//Resources pages---------------------------------------------------------------------------
Route::get('/resources', function(){ return view('resources');});
Route::resource('/collegecoursetype',CollegeCourseTypesController::class);
Route::resource('/viewcollegecoursetype',ViewCollegeCourseTypesController::class);
Route::resource('/coursetype',CourseTypesController::class);
Route::resource('/successstories',SuccessStoriesController::class);
Route::resource('/viewsuccessstories',ViewSuccessStoriesController::class);
Route::resource('/collegecalendar',CollegeCalendarController::class);
Route::resource('/viewcollegecalendar',ViewCollegeCalendarController::class);
Route::resource('/careerguidance',CareerGuidanceController::class);
Route::resource('/viewcareerguidance',ViewCareerGuidanceController::class);
Route::get('/updateResources', [App\Http\Controllers\AdminResourcesController::class, 'index'])->name('admin.adminResources');




//About TVET Pages---------------------------------------------------------------------------------
Route::get('/updateAboutTvet', [App\Http\Controllers\AdminAboutTvetController::class, 'index'])->name('admin.adminAboutTvet');
Route::resource('/abouttvet',GuestAboutTvetController::class);
Route::resource('/adminAbouttvet', AboutTvetController::class);
Route::resource('/publicTvetCollege',PublicTvetController::class);
Route::resource('/privateTvetCollege',PrivateTvetController::class);
Route::resource('/viewcommunitycolleges',ViewCommunityCollegesController::class);
Route::resource('/viewsetas',ViewSetasController::class);

Route::get('/aboutus', function(){ return view('aboutus');});


//News Pages---------------------------------------------------------------------------------
Route::resource('/viewNews', ViewNewsController::class);
Route::resource('/news', NewsController::class);

//TVET College Time pages---------------------------------------------------------------------------------
Route::resource('/admintvetcollegetimes', TvetCollegeTimesController::class);
Route::resource('/tvetcollegetimes', ViewTvetCollegeTimesController::class);
Route::get('/updateTvetCollegeTime', [App\Http\Controllers\AdminTvetCollegeTimeController::class, 'index'])->name('admin.adminTvetCollegeTime');


Route::get('/registration', function(){ return view('registration');});

Route::get('/internalStakeholderList', function(){
    return view('internalStakeholderList',[InternalStakeHolderController::class, 'getInternalStakeHolder']);
});



Route::post('/insertInternalStakeHolder', [InternalStakeHolderController::class, 'insertInternalStakeHolder']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/updateContactUs', [App\Http\Controllers\AdminContactUsController::class, 'index'])->name('admin.adminContact');
Route::get('/updateHomePage', [App\Http\Controllers\AdminHomePageController::class, 'index'])->name('admin.adminHomePage');





Route::resource('slides', SliderController::class);
Route::resource('footer', FooterController::class);
