<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//would probably use resources if I knew more about them earlier...

Route::controller(NotesController::class)->group(function () {

    Route::get('/notes/showAll', 'showAll');
    Route::delete('/notes/deleteAll', 'deleteAll'); //never used, but it's there.

    Route::get('/notes/history', 'history');
    Route::post('/notes/create', 'store');
    Route::put('/notes/edit/{id}', 'update');
    Route::get('/notes/{id}', 'show');
    Route::delete('/notes/delete/{id}', 'delete');
    Route::get('/{id}', 'show');
});

Route::controller(CategoriesController::class)->group(function () {

    Route::get('/categories/showAll', 'showAll');
    Route::delete('/categories/deleteAll', 'deleteAll');

    Route::get('/categories/history', 'history');
    Route::post('/categories/create', 'store');
    Route::put('/categories/edit/{id}', 'update');
    Route::get('/categories/{id}', 'show');
    Route::delete('/categories/delete/{id}', 'delete');
});
