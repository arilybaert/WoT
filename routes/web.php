<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\StudentsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [SearchController::class, 'getIndex'])->name('search');
    Route::get('/logbook', [LogbookController::class, 'getIndex'])->name('logbook');
    Route::get('/students', [StudentsController::class, 'getIndex'])->name('students');
});




// Route::get('/search', 'SearchController@getIndex')->name('search');
// Route::get('/logbook', 'LogbookController@getIndex')->name('logbook');
// Route::get('/students', 'StudentsController@getIndex')->name('students');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
