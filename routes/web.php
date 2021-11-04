<?php
use App\Http\Controllers\DogController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EventController;
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

Route::resource('/', MenuController::class);
Route::resource('list/', ListController::class);
Route::resource('add/', AddController::class);
Route::post('events',[EventController::class, 'store']);
Route::delete('events/{id}', [EventController::class, 'destroy']);
Route::get('events/edit/{id}', [EventController::class, 'edit']);
Route::put('events/update/{id}', [EventController::class, 'update']);

