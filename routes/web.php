<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [HomeController::class, 'HomeView']) -> name('home');
Route::get('/about', [AboutController::class, 'AboutView']) -> name('about');
Route::get('/registration', [RegistrationController::class, 'RegistrationView']) -> name('registration');
Route::get('/contact', [ContactController::class, 'ContactView']) -> name('contact');
Route::resource('/student', StudentController::class);
