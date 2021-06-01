<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PropartyTypesController;
use App\Http\Controllers\PropartiesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\OwnersController;
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

Route::group([
    'prefix' => 'proparties',
], function () {
    Route::get('/', [PropartiesController::class, 'index'])
         ->name('proparties.proparty.index');
    Route::get('/create', [PropartiesController::class, 'create'])
         ->name('proparties.proparty.create');
    Route::get('/show/{proparty}', [PropartiesController::class, 'show'])
         ->name('proparties.proparty.show')->where('id', '[0-9]+');
    Route::get('/{proparty}/edit', [PropartiesController::class, 'edit'])
         ->name('proparties.proparty.edit')->where('id', '[0-9]+');
    Route::post('/', [PropartiesController::class, 'store'])
         ->name('proparties.proparty.store');
    Route::put('proparty/{proparty}',  [PropartiesController::class, 'update'])
         ->name('proparties.proparty.update')->where('id', '[0-9]+');
    Route::delete('/proparty/{proparty}', [PropartiesController::class, 'destroy'])
         ->name('proparties.proparty.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'rooms',
], function () {
    Route::get('/', [RoomsController::class, 'index'])
         ->name('rooms.room.index');
    Route::get('/create', [RoomsController::class, 'create'])
         ->name('rooms.room.create');
    Route::any('/multicreate', [RoomsController::class, 'multicreate'])
         ->name('rooms.room.multicreate');
    Route::get('/show/{room}', [RoomsController::class, 'show'])
         ->name('rooms.room.show')->where('id', '[0-9]+');
    Route::get('/{room}/edit', [RoomsController::class, 'edit'])
         ->name('rooms.room.edit')->where('id', '[0-9]+');
    Route::post('/', [RoomsController::class, 'store'])
         ->name('rooms.room.store');
    Route::post('/multistore', [RoomsController::class, 'multistore'])
         ->name('rooms.room.multistore');
    Route::put('room/{room}', [RoomsController::class, 'update'])
         ->name('rooms.room.update')->where('id', '[0-9]+');
    Route::delete('/room/{room}', [RoomsController::class, 'destroy'])
         ->name('rooms.room.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'owners',
], function () {
    Route::get('/', [OwnersController::class, 'index'])
         ->name('owners.owner.index');
    Route::get('/create', [OwnersController::class, 'create'])
         ->name('owners.owner.create');
    Route::any('/ownercreate', [OwnersController::class, 'ownercreate'])
         ->name('owners.owner.ownercreate');
    Route::get('/show/{owner}', [OwnersController::class, 'show'])
         ->name('owners.owner.show')->where('id', '[0-9]+');
    Route::get('/{owner}/edit', [OwnersController::class, 'edit'])
         ->name('owners.owner.edit')->where('id', '[0-9]+');
    Route::post('/', [OwnersController::class, 'store'])
         ->name('owners.owner.store');
    Route::post('/ownerstore', [OwnersController::class, 'ownerstore'])
         ->name('owners.owner.ownerstore');
    Route::put('owner/{owner}', [OwnersController::class, 'update'])
         ->name('owners.owner.update')->where('id', '[0-9]+');
    Route::delete('/owner/{owner}', [OwnersController::class, 'destroy'])
         ->name('owners.owner.destroy')->where('id', '[0-9]+');
});
