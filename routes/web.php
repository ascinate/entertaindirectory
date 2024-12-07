<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ArtistPortController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AdverController;
use App\Http\Controllers\TransController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AnalyticController;
use App\Http\Controllers\AdlistingController;
use App\Http\Controllers\UserEventController;

use App\Models\State;
use App\Models\City;

Route::get('/get-states/{countryId}', function ($countryId) {
    $states = State::where('country_id', $countryId)->get();
    return response()->json(['states' => $states]);
});

Route::get('/get-cities/{stateId}', function ($stateId) {
    $cities = City::where('state_id', $stateId)->get();
    return response()->json(['cities' => $cities]);
});


Route::get('/', function () {
    return view('index');
});
Route::view('admin/login', 'admin/adminlogin');
Route::view('admin/dashboard', 'admin/dashboard');
Route::view('/listing-details', '/listing-details');
Route::view('/listing', '/listing');
Route::view('/message', '/message');
Route::view('/new', '/new');
Route::view('/news-details', '/news-details');


Route::view('login', 'login');
//Route::post('/login', [LoginController::class, 'login']);
//Route::get('/logout', [LoginController::class, 'logout']);
//Route::get('/dashboard', [LoginController::class, 'dashboard']);


Route::post('adminlogin', [AdminController::class, 'adminlogin']);
Route::get('admin/logout', [AdminController::class, 'logout']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

Route::post('/register', [UserController::class, 'create']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profileupdate/{id}', [UserController::class, 'updateProfile'])->name('profile.update');
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/listing', [UserController::class, 'listing'])->name('listing');
Route::get('/listing-details/{id}', [UserController::class, 'show'])->name('listing.details');
Route::get('logout', [UserController::class, 'logout']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/create-event', [UserController::class, 'create_event']);
Route::get('/userevent', [UserController::class, 'userevent']);
Route::get('/message', [UserController::class, 'message']);

Route::post('/submit-review', [UserController::class, 'submitReview'])->name('submit.review');




Route::get('/general/{id}', [GeneralController::class, 'general'])->name('general')->middleware('auth');
Route::post('/generalupdate/{id}', [GeneralController::class, 'updateGeneral'])->name('general.update');


Route::get('event', [EventController::class, 'event']);
Route::get('/event/create', [EventController::class, 'create']);
Route::post('/add-event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('editevent');
Route::post('/event/update/{id}', [EventController::class, 'update'])->name('updateevent');
Route::get('/event/delete/{id}', [EventController::class, 'destroy'])->name('deleteevent');

Route::get('skill', [SkillController::class, 'skill']);
Route::get('/skill/create', [SkillController::class, 'create']);
Route::post('/add-skill', [SkillController::class, 'store'])->name('skill.store');
Route::get('/skill/edit/{id}', [SkillController::class, 'edit'])->name('editskill');
Route::post('/skill/update/{id}', [SkillController::class, 'update'])->name('updateskill');
Route::get('/skill/delete/{id}', [SkillController::class, 'destroy'])->name('deleteskill');


Route::get('portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/portfolio/create', [PortfolioController::class, 'create']);
Route::post('/addportfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('editportfolio');
Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('updateportfolio');
Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('deleteportfolio');



Route::get('user', [UserListController::class, 'user']);
Route::get('/user/create', [UserListController::class, 'create']);
Route::post('/add-user', [UserListController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserListController::class, 'edit'])->name('edituser');
Route::post('/user/update/{id}', [UserListController::class, 'update'])->name('updateuser');
Route::get('/user/delete/{id}', [UserListController::class, 'destroy'])->name('deleteuser');

Route::get('performer', [PerformerController::class, 'performer']);
Route::get('/performer/create', [PerformerController::class, 'create']);
Route::post('/add-performer', [PerformerController::class, 'store_performer'])->name('performer.store');
Route::get('/performer/edit/{id}', [PerformerController::class, 'edit'])->name('editperformer');
Route::post('/performer/update/{id}', [PerformerController::class, 'update_performer'])->name('updateperformer');
Route::get('/performer/delete/{id}', [PerformerController::class, 'delete'])->name('deleteperformer');

Route::get('schedule', [ScheduleController::class, 'schedule']);
Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('/add-schedule', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/schedule/edit/{id}', [ScheduleController::class, 'edit'])->name('editschedule');
Route::post('/schedule/update/{id}', [ScheduleController::class, 'update'])->name('updateschedule');
Route::get('/schedule/delete/{id}', [ScheduleController::class, 'destroy'])->name('deleteschedule');

Route::get('ad', [AdverController::class, 'ad']);
Route::get('/ad/create', [AdverController::class, 'create'])->name('ad.create');
Route::post('/add-ad', [AdverController::class, 'store'])->name('ad.store');
Route::get('/ad/edit/{id}', [AdverController::class, 'edit'])->name('editad');
Route::post('/ad/update/{id}', [AdverController::class, 'update'])->name('updatead');
Route::get('/ad/delete/{id}', [AdverController::class, 'destroy'])->name('deletead');

Route::get('trans', [TransController::class, 'trans']);
Route::get('/trans/create', [TransController::class, 'create'])->name('trans.create');
Route::post('/addtrans', [TransController::class, 'store'])->name('trans.store');
Route::get('/trans/edit/{id}', [TransController::class, 'edit'])->name('edittrans');
Route::post('/trans/update/{id}', [TransController::class, 'update'])->name('updatetrans');
Route::get('/trans/delete/{id}', [TransController::class, 'destroy'])->name('deletetrans');

Route::get('position', [PositionController::class, 'position']);
Route::get('/position/create', [PositionController::class, 'create'])->name('position.create');
Route::post('/addposition', [PositionController::class, 'store'])->name('position.store');
Route::get('/position/edit/{id}', [PositionController::class, 'edit'])->name('editposition');
Route::post('/position/update/{id}', [PositionController::class, 'update'])->name('updateposition');
Route::get('/position/delete/{id}', [PositionController::class, 'destroy'])->name('deleteposition');

Route::get('analytic', [AnalyticController::class, 'analytic']);
Route::get('/analytic/create', [AnalyticController::class, 'create'])->name('analytic.create');
Route::post('/addanalytic', [AnalyticController::class, 'store'])->name('analytic.store');
Route::get('/analytic/edit/{id}', [AnalyticController::class, 'edit'])->name('editanalytic');
Route::post('/analytic/update/{id}', [AnalyticController::class, 'update'])->name('updateanalytic');
Route::get('/analytic/delete/{id}', [AnalyticController::class, 'destroy'])->name('deleteanalytic');



Route::middleware('auth')->group(function () {
    Route::get('/user-portfolio/create', [ArtistPortController::class, 'create'])->name('portfolio.create');
    Route::post('/user-portfolio/store', [ArtistPortController::class, 'store'])->name('userportfolio.store');
    Route::get('/portfolio-list', [ArtistPortController::class, 'portfolio']);
    Route::get('/user-portfolio/{id}/edit', [ArtistPortController::class, 'edit'])->name('edit_portfolio');
    Route::post('/user-portfolio/{id}/update', [ArtistPortController::class, 'update'])->name('update_portfolio');
    Route::get('/user-portfolio/delete/{id}', [ArtistPortController::class, 'delete'])->name('delete_portfolio');
    Route::get('/add-portfolio', [ArtistPortController::class, 'addPortfolio'])->name('add-portfolio')->middleware('auth');
    Route::get('/listing-details', [ArtistPortController::class, 'listing_details'])->name('listing-details');

});

Route::get('/user-event/create', [UserEventController::class, 'create'])->name('user_event.create');
Route::post('/user-event/store', [UserEventController::class, 'store'])->name('user_event.store');
Route::get('/userevent', [UserEventController::class, 'userevent']);
Route::get('/user-event/edit/{id}', [UserEventController::class, 'edit_event'])->name('edit_event');
Route::post('/user-event/update/{id}', [UserEventController::class, 'update'])->name('update_event');
Route::get('/user-event/delete/{id}', [UserEventController::class, 'destroy'])->name('deleteevent');
Route::get('/eventlist/{artistId}', [UserEventController::class, 'eventlist'])->name('eventlist');
Route::get('/event-details/{id}', [UserEventController::class, 'show'])->name('event.details');







Route::get('search', [UserController::class, 'search']);
Route::get('adlisting', [AdlistingController::class, 'adlist']);
Route::get('/adlisting-details/{id}', [AdlistingController::class, 'details'])->name('adlisting.details');
Route::get('adlistingform/{id}', [AdlistingController::class, 'adForm'])->name('adlisting.form');
Route::post('/adlistingform', [AdlistingController::class, 'store'])->name('adlistingform.store');



