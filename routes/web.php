<?php

use App\Http\Controllers\PortfolioController;
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


Route::get('/',[PortfolioController::class,'index'])->name('index');
Route::get('about',[PortfolioController::class,'about'])->name('about');
Route::get('blog',[PortfolioController::class,'blog'])->name('blog');

Route::get('contact',[PortfolioController::class,'contact'])->name('contact');
Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('contactcreate',[PortfolioController::class,'contactcreate'])->name('contactcreate');
Route::post('contactstore',[ContactController::class,'contactstore'])->name(
    'contactstore');
