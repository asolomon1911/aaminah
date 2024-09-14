<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::get("/", [App\Http\Controllers\CommonFrontendController::class, "home"])->name("home");
Route::get("/about", [App\Http\Controllers\CommonFrontendController::class, "about"])->name("about");
Route::get("/contact", [App\Http\Controllers\CommonFrontendController::class, "contact"])->name("contact");
Route::get("/services", [App\Http\Controllers\CommonFrontendController::class, "services"])->name("services");
Route::get("/the-ally-difference", [App\Http\Controllers\CommonFrontendController::class, "allyDifference"])->name("ally.difference");
Route::get("/career", [App\Http\Controllers\CommonFrontendController::class, "career"])->name("career");
Route::post("/send-contact-us-email", [App\Http\Controllers\ContactUsController::class, "sendContactUsEmail"])->name("send-contact-us-email");
Route::post("/send-carrier-email", [App\Http\Controllers\ContactUsController::class, "sendCareerEmail"])->name("send-career-email");

Route::get("/clear", function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Caches cleared successfully.';
});
