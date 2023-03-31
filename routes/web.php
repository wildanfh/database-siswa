<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntryYearController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ViewController::class, 'categories'])->name('views')->middleware('auth');

Route::get('views/{category}', [ViewController::class, 'units'])->name('views.unit');

Route::get('views/{category}/{unit}', [ViewController::class, 'groups'])->name('views.unit.group');

Route::get('views/{category}/{unit}/{group}', [ViewController::class, 'students'])->name('views.unit.group.student');

Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('units', UnitController::class)->middleware('auth');
Route::resource('groups', GroupController::class)->middleware('auth');
Route::resource('entryYears', EntryYearController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');



Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

