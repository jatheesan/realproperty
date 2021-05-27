<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PropartyTypesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/properties',[PageController::class,'getproperties']);
Route::get('/contactus',[PageController::class,'getcontact']);
Route::get('/aboutus',[PageController::class,'getabout']);
Route::get('/single-property',[PageController::class,'getsingleproperty']);

Route::get('/admin', function () {
    return view('backendpages.dashboard');
 });

 Route::get('/error', function () {
    return view('backendpages.404');
 });


Route::group([
    'prefix' => 'proparty_types',
], function () {
    Route::get('/', [PropartyTypesController::class, 'index'])
         ->name('proparty_types.proparty_type.index');
    Route::get('/create', [PropartyTypesController::class, 'create'])
         ->name('proparty_types.proparty_type.create');
    Route::get('/show/{propartyType}', [PropartyTypesController::class, 'show'])
         ->name('proparty_types.proparty_type.show')->where('id', '[0-9]+');
    Route::get('/{propartyType}/edit', [PropartyTypesController::class, 'edit'])
         ->name('proparty_types.proparty_type.edit')->where('id', '[0-9]+');
    Route::post('/', [PropartyTypesController::class, 'store'])
         ->name('proparty_types.proparty_type.store');
    Route::put('proparty_type/{propartyType}', [PropartyTypesController::class, 'update'])
         ->name('proparty_types.proparty_type.update')->where('id', '[0-9]+');
    Route::delete('/proparty_type/{propartyType}', [PropartyTypesController::class, 'destroy'])
         ->name('proparty_types.proparty_type.destroy')->where('id', '[0-9]+');
});
