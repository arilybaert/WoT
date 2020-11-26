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
*/

Route::get('/', function () {
    return view('pages.search');
});



Route::get('/search', 'SearchController@getIndex')->name('search');
Route::get('/logbook', 'LogbookController@getIndex')->name('logbook');
Route::get('/students', 'StudentsController@getIndex')->name('students');


