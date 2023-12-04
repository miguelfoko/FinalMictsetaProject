<?php
use App\Models\CourseType;
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
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\IcassTrainingVideosController;
use App\Http\Controllers\ExamTrainingVideosController;
use App\Http\Controllers\ViewIcassTrainingVideosController;
use App\Http\Controllers\ViewCommunityCollegesController;
use App\Http\Controllers\ViewSetasController;
use App\Http\Controllers\ViewExamTrainingVideosController;
use App\Http\Controllers\ViewGetInTouchController;
use App\Http\Controllers\ViewRegionalLocationsController;
use App\Http\Controllers\ViewFaqsController;
use App\Http\Controllers\ExamResourceController;
use App\Http\Controllers\RegionalLocationsController;
use App\Http\Controllers\ViewSubscribeController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CommunityCollegesController;
use App\Http\Controllers\SetasController;
use App\Http\Controllers\ShowExamResourceController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ShowCollegesController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\ShowSubjectsController;







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

//Home pages---------------------------------------------------------------------------
Route::resource('/viewsubscribe',ViewSubscribeController::class);
Route::resource('/subscription',SubscribeController::class);


//Contact Us pages---------------------------------------------------------------------------
Route::get('/contactus', function(){return view('contact');});
Route::resource('/viewgetintouch',ViewGetInTouchController::class);
Route::resource('/viewregionallocations',ViewRegionalLocationsController::class);
Route::resource('/viewfaqs',ViewFaqsController::class);
Route::resource('/faqs',FaqsController::class);
Route::resource('/regionallocations',RegionalLocationsController::class);


Route::get('/test', function(){return view('testPopup');});

//Examination pages
Route::get('/updateExamination', [App\Http\Controllers\AdminExaminationController::class, 'index'])->name('admin.adminExamination');
Route::get('/examinations', function(){ return view('examinations');});
Route::resource('/icasstrainingvideos',IcassTrainingVideosController::class);
Route::resource('/examtrainingvideos',ExamTrainingVideosController::class);
Route::resource('/viewexamresources',ViewExamResourcesController::class);
Route::resource('/viewexamtrainingvideos',ViewExamTrainingVideosController::class);
Route::resource('/viewicasstrainingvideos',ViewIcassTrainingVideosController::class);
Route::resource('/examinformationresources',ExamResourceController::class);
Route::resource('/showexaminformationresources',ShowExamResourceController::class);
Route::resource('/programs',ProgramController::class);








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
Route::resource('/showcolleges',ShowCollegesController::class);
Route::resource('/college',CollegeController::class);
Route::resource('/subjects',SubjectsController::class);
Route::resource('/showsubjects',ShowSubjectsController::class);

 

//About TVET Pages---------------------------------------------------------------------------------
Route::get('/updateAboutTvet', [App\Http\Controllers\AdminAboutTvetController::class, 'index'])->name('admin.adminAboutTvet');
Route::resource('/abouttvet',GuestAboutTvetController::class);
Route::resource('/adminAbouttvet', AboutTvetController::class);
Route::resource('/publicTvetCollege',PublicTvetController::class);
Route::resource('/privateTvetCollege',PrivateTvetController::class);
Route::resource('/viewcommunitycolleges',ViewCommunityCollegesController::class);
Route::resource('/communitycolleges',CommunityCollegesController::class);
Route::resource('/setas',SetasController::class);
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
Route::get('/viewCreateSlider', function(){ return view('sliders.create');});
Route::get('/viewEditSlider', function(){ return view('sliders.edit');});


Route::resource('footer', FooterController::class);
Route::get('/viewCreateFooter', function(){ return view('admin.footer.create');});

Route::get('/viewCreaRegionalLocation', function(){ return view('admin.contactus.regionallocations.create');});
Route::get('/viewCreateFaq', function(){ return view('admin.faqs.create');});
Route::get('/viewCreateNews', function(){ return view('admin.news.create');});
Route::get('/viewCreateExaminationResource', function(){ return view('admin.examinations.examresources.create');});
Route::get('/viewCreateExamVideo', function(){ return view('admin.examinations.examtrainingvideos.create');});
Route::get('/viewCreateIcassVideo', function(){ return view('admin.examinations.icasstrainingvideos.create');});
Route::get('/viewAboutTvet', function(){ return view('admin.abouttvet.create');});
Route::get('/viewCreateCommunityCollege', function(){ return view('admin.abouttvet.communitycolleges.create');});
Route::get('/viewCreateSeta', function(){ return view('admin.abouttvet.setas.create');});
Route::get('/viewCreateCollegeTimes', function(){ return view('admin.tvetcollegetimes.create');});
Route::get('/viewCreateSuccessStories', function(){ return view('admin.resources.successstories.create');});
Route::get('/viewCreateCarreerGuidance', function(){ return view('admin.resources.careerguidance.create');});
Route::get('/viewCreateCalendar', function(){ return view('admin.resources.collegecalendar.create');});
Route::get('/viewCreateCollegeCourseType', function(){ return view('admin.resources.create');});
Route::get('/viewCreateDomain', function(){ return view('admin.resources.coursetypes.program.create');});

//A revoir ou supprimer
Route::get('/viewCreateCourse', function(){$coursetypes = CourseType::all(); return view('admin.resources.coursetypes.subjects.create', compact('coursetypes'));});
Route::get('/viewCreateProgram', function(){ return view('admin.resources.coursetypes.create');});
Route::get('/viewCreateCollege', function(){ return view('admin.resources.coursetypes.college.create');});
//Fin à revoir ou supprimer