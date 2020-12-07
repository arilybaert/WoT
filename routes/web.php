<?php

use App\Http\Controllers\ExamsController;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [SearchController::class, 'getIndex'])->name('search');
    Route::post('/searchstudent', [SearchController::class, 'postSearch'])->name('search.student');
    Route::get('/logbook', [LogbookController::class, 'getIndex'])->name('logbook');
<<<<<<< HEAD

    Route::get('/students/classroom/{time}/{date}', [StudentsController::class, 'getIndex'])->name('students.classroom');
=======
    Route::get('/students', [StudentsController::class, 'getIndex'])->name('students');
    Route::get('/exams', [ExamsController::class, 'getIndex'])->name('exams');
    Route::get('/examsStudents', [ExamsController::class, 'getExamsStudent'])->name('examsStudents');

>>>>>>> 7100edb772a413c0ebea801b0bfa39d09bda4bdf
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', [SearchController::class, 'getIndex'])->name('search');
