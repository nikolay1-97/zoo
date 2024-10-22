<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;


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




Route::get(uri: '/', action: 'App\Http\Controllers\Cell\IndexController') -> name(name:'cell.index');
Route::get(uri: '/create_cell', action: 'App\Http\Controllers\Cell\CreateController') -> name(name:'cell.create');
Route::post(uri: '/', action: 'App\Http\Controllers\Cell\StoreController') -> name(name:'cell.store');
Route::get(uri: '/{cell}', action: 'App\Http\Controllers\Cell\ShowController') -> name(name:'cell.show');
Route::get(uri: '/{cell}/edit', action: 'App\Http\Controllers\Cell\EditController') -> name(name:'cell.edit');
Route::patch(uri: '/{cell}', action: 'App\Http\Controllers\Cell\UpdateController') -> name(name:'cell.update');
Route::delete(uri: '/{cell}', action: 'App\Http\Controllers\Cell\DestroyController') -> name(name:'cell.delete');

Route::get(uri: '/animal/create', action: 'App\Http\Controllers\Animal\CreateAnimalController') -> name(name:'animal.create');
Route::post(uri: '/animal', action: 'App\Http\Controllers\Animal\StoreAnimalController') -> name(name:'animal.store');
Route::get(uri: '/animals/{animal}', action: 'App\Http\Controllers\Animal\ShowAnimalController') -> name(name:'animal.show');
Route::get(uri: '/animal/{animal}/edit', action: 'App\Http\Controllers\Animal\EditAnimalController') -> name(name:'animal.edit');
Route::patch(uri: '/animal/{animal}', action: 'App\Http\Controllers\Animal\UpdateAnimalController') -> name(name:'animal.update');
Route::delete(uri: '/animal/{animal}', action: 'App\Http\Controllers\Animal\DestroyAnimalController') -> name(name:'animal.delete');