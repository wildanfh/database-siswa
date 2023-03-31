<?php

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

Route::get('/', [ViewController::class, 'categories'])->name('views');

Route::get('views/{category}', [ViewController::class, 'units'])->name('views.unit');

Route::get('views/{category}/{unit}', [ViewController::class, 'groups'])->name('views.unit.group');

Route::get('views/{category}/{unit}/{group}', [ViewController::class, 'students'])->name('views.unit.group.student');

Route::resources([
    'categories' => CategoryController::class,
    'units' => UnitController::class,
    'groups' => GroupController::class,
    'entryYears' => EntryYearController::class,
    'students' => StudentController::class,
]);

