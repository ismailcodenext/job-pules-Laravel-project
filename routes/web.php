<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\EmployerJobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomePageController;


//Admin Dashboard Work Start

//user employer Api route
Route::post('/user-employer-login',[UserController::class,'EmployerLogin']);
//user candidate Api route
Route::post('/user-candidate-login',[UserController::class,'CandidateLogin']);


// Robiul islam create this controller

// Employer Page Api Route
Route::get("/list-employer",[EmployerController::class,'employerList'])->middleware('auth:sanctum');
Route::post("/employer-by-id",[EmployerController::class,'employerById'])->middleware('auth:sanctum');
Route::post("/update-employer",[EmployerController::class,'employerUpdate'])->middleware('auth:sanctum');
Route::post("/delete-employer",[EmployerController::class,'employerDelete'])->middleware('auth:sanctum');


// Robiul islam create this controller

// Candidate Page Api Route
Route::get("/list-candidate",[CandidateController::class,'candidateList'])->middleware('auth:sanctum');
Route::post("/candidate-by-id",[CandidateController::class,'candidateById'])->middleware('auth:sanctum');
Route::post("/update-candidate",[CandidateController::class,'candidateUpdate'])->middleware('auth:sanctum');
Route::post("/delete-candidate",[CandidateController::class,'candidateDelete'])->middleware('auth:sanctum');


//Admin Back-end Route
Route::view('Employer-Page','pages.dashboard.admin-dashboard.companies-page');


//----------------Admin Dashboard Work End---------------------------//


//----------------Employer Dashboard Work Start---------------------------//

//employer dashboard
Route::view('/employer-profile','pages.dashboard.employer-page.employer');

//employer job create dashboard
Route::view('/employer-job-list','pages.dashboard.employer-page.employer-job');

//Employer Job CRUD Api Route
Route::post("/create-job",[EmployerJobController::class,'jobCreate'])->middleware('auth:sanctum');
Route::get("/list-job",[EmployerJobController::class,'jobList'])->middleware('auth:sanctum');
Route::post("/job-by-id",[EmployerJobController::class,'jobById'])->middleware('auth:sanctum');
Route::post("/update-job",[EmployerJobController::class,'jobUpdate'])->middleware('auth:sanctum');
Route::post("/delete-job",[EmployerJobController::class,'jobDelete'])->middleware('auth:sanctum');



//----------------Employer Dashboard Work End---------------------------//


//----------------Candidate Dashboard Work Start---------------------------//

//candidate dashboard
Route::view('/candidate-profile','pages.dashboard.candidate-page.candidate');


//----------------Candidate Dashboard Work End---------------------------//




// User Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');
Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware('auth:sanctum');



// front-end page Route
Route::view('/','pages.front-end-page.home-section.home-page');
Route::view('/about','pages.front-end-page.about-section.about-page');
Route::view('/job','pages.front-end-page.job-section.job-page');
Route::view('/contact','pages.front-end-page.contact-section.contact-page');

// Page Routes
Route::view('/userLogin','pages.auth.login-page')->name('login');
Route::view('/userRegistration','pages.auth.registration-page');
Route::view('/sendOtp','pages.auth.send-otp-page');
Route::view('/verifyOtp','pages.auth.verify-otp-page');
Route::view('/resetPassword','pages.auth.reset-pass-page');
Route::view('/userProfile','pages.dashboard.profile-page');
Route::view('/dashboardSummary','pages.dashboard.dashboard-page');



//Company registration and login route -> Ismail Hossain
Route::view('/employer-registration','pages.front-end-page.company.registration');
Route::view('/candidate-registration','pages.front-end-page.candidate.registration');



// employer & candidate registration and login route -> Robiul
Route::view('/employer-login','pages.front-end-page.company.login');
Route::view('/candidate-login','pages.front-end-page.candidate.login');


