<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// FrontEnd

ROute::get('/',[FrontendController::class,'index']);
ROute::get('/contact',[FrontendController::class,'contact']);
ROute::get('/course',[FrontendController::class,'course']);
ROute::get('/about',[FrontendController::class,'about']);
ROute::get('/blog',[FrontendController::class,'blog']);


// Backend
Route::resource('faq',FaqController::class);
Route::resource('teams',TeamController::class);
Route::resource('notices',NoticeController::class);
Route::resource('message',MessageController::class);