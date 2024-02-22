<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomePageController;

// User Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');
Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware('auth:sanctum');



// Robiul islam create this controller 

// Home Page Api Route 
Route::post("/create-homepage",[HomePageController::class,'HomePageCreate'])->middleware('auth:sanctum');
Route::get("/list-homepage",[HomePageController::class,'HomePageList'])->middleware('auth:sanctum');
Route::post("/homepage-by-id",[HomePageController::class,'HomePageByID'])->middleware('auth:sanctum');
Route::post("/update-homepage",[HomePageController::class,'HomePageUpdate'])->middleware('auth:sanctum');
Route::post("/delete-homepage",[HomePageController::class,'HomePageDelete'])->middleware('auth:sanctum');











// Report
Route::get("/sales-report/{FormDate}/{ToDate}",[ReportController::class,'SalesReport'])->middleware('auth:sanctum');



// front-end page Route
Route::view('/','pages.front-end-page.home-section.home-page');
Route::view('/about','pages.front-end-page.about-section.about-page');
Route::view('/job','pages.front-end-page.job-section.job-page');
Route::view('/contact','pages.front-end-page.contact-section.contact-page');





// Back-end Route
Route::view('Home-Page','pages.dashboard.home-page.home-section');
Route::view('LabohemeTop','pages.dashboard.laboheme-page.laboheme-top');





// Page Routes
Route::view('/userLogin','pages.auth.login-page')->name('login');
Route::view('/userRegistration','pages.auth.registration-page');
Route::view('/sendOtp','pages.auth.send-otp-page');
Route::view('/verifyOtp','pages.auth.verify-otp-page');
Route::view('/resetPassword','pages.auth.reset-pass-page');
Route::view('/userProfile','pages.dashboard.profile-page');
Route::view('/dashboardSummary','pages.dashboard.dashboard-page');

