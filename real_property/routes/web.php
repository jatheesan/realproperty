<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PropartyTypesController;
use App\Http\Controllers\PropartiesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BoxRoomController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\sendEmailController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/boxroom4rent', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Auth::routes();
Route::get('/prop/{id}',[PageController::class,'getproperties']);
Route::get('/contactus',[PageController::class,'getcontact']);
Route::get('/aboutus',[PageController::class,'getabout']);
Route::get('/prop/{id}',[PageController::class,'getproperty'])->name('property.view')->where('id', '[0-9]+');

Route::get('/properties/list',[FilterController::class,'filtering'])->name('properties.filtering');
Route::get('/property/list',[FilterController::class,'filteringhome'])->name('properties.filtering.home');
Route::get('/',[BoxRoomController::class,'index']);
Route::get('/list',[BoxRoomController::class,'listing']);
Route::get('/about',[BoxRoomController::class,'about']);
Route::get('/contact',[BoxRoomController::class,'contact']);
Route::get('/iHOME-administrative',[BoxRoomController::class,'signin']);
Route::get('/single/{id}',[BoxRoomController::class,'single'])->name('property.details');
Route::get('/single_pro',[BoxRoomController::class,'single_pro']);

Route::post('/sendmail/send', [sendEmailController::class, 'sendm']);
Route::post('/sendmail/mail', [sendEmailController::class, 'mail']);

Route::get('/privacy-policy', [BoxRoomController::class, 'policy']);

Route::get('/slider', function () {
     return view('pages.slider');
});

Route::group(['middleware' => ['auth']], function() {


     Route::get('/admin', function () {
     return view('backendpages.dashboard');
     });

     Route::get('/error', function () {
     return view('backendpages.404');
     });

     //Route::get('/change-password', 'User\ChangePasswordController@index');
     Route::post('/change-password', [ChangePasswordController::class, 'store'])->name('change.password');

     Route::get('/profile', [UserController::class, 'index'])->name('profile');
     Route::post('/profile-edit', [UserController::class, 'edit'])->name('profile.edit');

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
     Route::any('/search', [PropartiesController::class, 'search'])
          ->name('proparties.proparty.search');
     Route::any('/stage/search', [PropartiesController::class, 'uncompletesearch'])
          ->name('proparties.proparty.uncompletesearch');
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

     Route::group([
          'prefix' => 'properties',
      ], function () {
          Route::get('/', [PropertiesController::class, 'index'])
               ->name('properties.property.index');
          Route::get('/create', [PropertiesController::class, 'create'])
               ->name('properties.property.create');
          Route::get('/show/{property}', [PropertiesController::class, 'show'])
               ->name('properties.property.show')->where('id', '[0-9]+');
          Route::get('/{property}/edit', [PropertiesController::class, 'edit'])
               ->name('properties.property.edit')->where('id', '[0-9]+');
          Route::post('/', [PropertiesController::class, 'store'])
               ->name('properties.property.store');
          Route::put('property/{property}', [PropertiesController::class, 'update'])
               ->name('properties.property.update')->where('id', '[0-9]+');
          Route::delete('/property/{property}', [PropertiesController::class, 'destroy'])
               ->name('properties.property.destroy')->where('id', '[0-9]+');
          Route::any('/search', [PropertiesController::class, 'search'])
               ->name('properties.property.search');
          Route::any('/stage/search', [PropertiesController::class, 'uncompletesearch'])
               ->name('properties.property.uncompletesearch');

          Route::put('property/{property}', [PropertiesController::class, 'complete'])
               ->name('properties.property.complete.update')->where('id', '[0-9]+');
      });

     // multi image route
     Route::any('/images/create/{id}',[ImageController::class, 'index'])->name('image.create');
     Route::post('/images/store', [ImageController::class, 'StoreImage'])->name('image.store');
     Route::post('/image/update/{id}', [ImageController::class, 'UpdateImage'])->name('image.update');
     Route::post('/image/delete/{id}', [ImageController::class, 'DeleteImage'])->name('image.delete');
     Route::get('/images/show', [ImageController::class, 'show'])->name('image');
});


