<?php

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
|route get c/create needs to be above /c/{campagin}. I'm not sure why
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/c/create', 'App\Http\Controllers\CampaignsController@create');
Route::post('/c', 'App\Http\Controllers\CampaignsController@store');
Route::get('/c/{campaign}', 'App\Http\Controllers\CampaignsController@show');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
