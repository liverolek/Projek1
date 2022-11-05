<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UserController;

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


Route::get('/', [TimelineController::class, 'timeline']);

Route::get('/types', [TypeController::class, 'all_types'])
->middleware('auth');


//Show Create Event Form
Route::get('/event/create', [EventController::class, 'create_event'])
->middleware('auth');

//Store Events Data
Route::post('/event',  [EventController::class, 'store_events'])
->middleware('auth');

//Show Edit  Event form
Route::get('/event/{event}/edit', [EventController::class, 'edit_event'])
->middleware('auth');

//Update Event
Route::put('/event/{event}', [EventController::class, 'update_event'])
->middleware('auth');

//Delete Event
Route::delete('/event/{event}', [EventController::class, 'destroy_event'])
->middleware('auth');




//Show Create Process Form
Route::get('/process/create', [ProcessController::class, 'create_process'])
->middleware('auth');

//Store Processes Data
Route::post('/process',  [ProcessController::class, 'store_processes'])
->middleware('auth');

//Show Edit  Process form
Route::get('/process/{process}/edit', [ProcessController::class, 'edit_process'])
->middleware('auth');

//Update Process
Route::put('/process/{process}', [ProcessController::class, 'update_process'])
->middleware('auth');

//Delete Process
Route::delete('/process/{process}', [ProcessController::class, 'destroy_process'])
->middleware('auth');



//Show Create Type Form
Route::get('/type/create', [TypeController::class, 'create_type'])
->middleware('auth');

//Store Types Data
Route::post('/type',  [TypeController::class, 'store_types'])
->middleware('auth');

//Show Edit  Type form
Route::get('/type/{type}/edit', [TypeController::class, 'edit_type'])
->middleware('auth');

//Update Type
Route::put('/type/{type}', [TypeController::class, 'update_type'])
->middleware('auth');

//Delete Type
Route::delete('/type/{type}', [TypeController::class, 'destroy_type'])
->middleware('auth');




//Show single object

//Show single event
Route::get('/event/{event}', [EventController::class, 'show_event']);

//Show single process
Route::get('/process/{process}', [ProcessController::class, 'show_process']);

//Show single type
Route::get('/type/{type}', [TypeController::class, 'show_type'])
->middleware('auth');


//Registration & Login

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])
->middleware('guest');

//Create Users
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout']);

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')
->middleware('guest');

//Login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Show Change Password
Route::get('/change-password', [UserController::class, 'changePassword'])
->middleware('auth');

//Update Password
Route::post('/change-password', [UserController::class, 'update'])
->middleware('auth');


  