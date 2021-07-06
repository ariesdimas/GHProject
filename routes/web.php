<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BomController;
use App\Http\Controllers\MobileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mobile', [MobileController::class,'index'])->name('mobile');
Route::get('/about', [MobileController::class, 'about'])->name('about');
Route::get('/contact', [MobileController::class, 'contact'])->name('contact');
Route::get('/catalogue/{id}', [MobileController::class,'catalogue'])->name('mobile.catalogue');
Route::get('/vehicle/{id}', [MobileController::class,'vehicle'])->name('mobile.vehicle');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
	Route::resource('customer', CustomerController::class);
	Route::resource('catalogue', CatalogueController::class);
	Route::resource('employees', EmployeesController::class);
    Route::resource('products', ProductController::class);
	Route::resource('vehicle', VehicleController::class);
	Route::resource('bom', BomController::class);	
	Route::get('/catalogue/{id}/deletedata', [CatalogueController::class,'deletedata'])->name('catalogue.deletedata');
	Route::get('/catalogue/{id}/addphoto', [CatalogueController::class,'addphoto'])->name('catalogue.addphoto');
	Route::post('/catalogue/savephoto', [CatalogueController::class,'simpanfoto'])->name('catalogue.savephoto');

	Route::get('/vehicle/{id}/deletedata', [VehicleController::class,'deletedata'])->name('vehicle.deletedata');
	Route::get('/vehicle/{id}/addphoto', [VehicleController::class,'addphoto'])->name('vehicle.addphoto');
	Route::post('/vehicle/savephoto', [VehicleController::class,'simpanfoto'])->name('vehicle.savephoto');
	
	Route::get('/bom/{id}/deletedata', [BomController::class,'deletedata'])->name('bom.deletedata');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

