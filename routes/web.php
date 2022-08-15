<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\LocalizationController;

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

// Route qui permet de connaître la langue active
Route::get('locale', [LocalizationController::class,'getLang'])->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}',[LocalizationController::class,'setLang'])->name('setlang');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programme', [PageController::class, 'programme'])->name('programme');
Route::get('/programme/{event}', [PageController::class, 'show_an_event'])->name('events.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/legal', [PageController::class, 'legal'])->name('legal');


require __DIR__.'/auth.php';


Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events')->middleware('auth');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create')->middleware('auth');
Route::post('/admin/events/register', [EventController::class, 'store'])->name('admin.events.store')->middleware('auth');
Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit')->middleware('auth');
Route::patch('/admin/events/{event}/update', [EventController::class, 'update'])->name('admin.events.update')->middleware('auth');
Route::delete('/admin/events/{event}/destroy', [EventController::class, 'destroy'])->name('admin.events.destroy')->middleware('auth');



Route::get('/admin/filters', [FilterController::class, 'index'])->name('admin.filters')->middleware('auth');
Route::get('/admin/filters/create', [FilterController::class, 'create'])->name('admin.filters.create')->middleware('auth');
Route::post('/admin/filters/register', [FilterController::class, 'store'])->name('admin.filters.store')->middleware('auth');
Route::get('/admin/filters/{filter}/edit', [FilterController::class, 'edit'])->name('admin.filters.edit')->middleware('auth');
Route::patch('/admin/filters/{filter}/update', [FilterController::class, 'update'])->name('admin.filters.update')->middleware('auth');
Route::delete('/admin/filters/{filter}/destroy', [FilterController::class, 'destroy'])->name('admin.filters.destroy')->middleware('auth');



Route::get('/admin/participants', [ParticipantController::class, 'index'])->name('admin.participants')->middleware('auth');
Route::get('/admin/participants/create', [ParticipantController::class, 'create'])->name('admin.participants.create')->middleware('auth');
Route::get('/admin/participants/{participant}/edit', [ParticipantController::class, 'edit'])->name('admin.participants.edit')->middleware('auth');
Route::patch('/admin/participants/{participant}/update', [ParticipantController::class, 'update'])->name('admin.participants.update')->middleware('auth');
Route::delete('/admin/participants/{participant}/destroy', [ParticipantController::class, 'destroy'])->name('admin.participants.destroy')->middleware('auth');


Route::get('/admin/general', [GeneralController::class, 'edit'])->name('admin.general')->middleware('auth');
Route::patch('/admin/general/update', [GeneralController::class, 'update'])->name('admin.generals.update')->middleware('auth');


Route::get('/export-all', [PageController::class, 'exportAll'])->middleware('auth')->name('exportAll');
Route::get('/export', [ParticipantController::class, 'export'])->middleware('auth')->name('export');
