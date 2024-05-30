<?php

use App\Http\Controllers\ArananController;
use App\Http\Controllers\AttemptController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParibasanController;
use App\Http\Controllers\ParikanController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
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
    return redirect('/auth/login');
});

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('form');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('exam', ExamController::class);
    Route::resource('exam.question', QuestionController::class);
    Route::resource('user', UserController::class);
    Route::resource('aranan', ArananController::class);
    Route::resource('paribasan', ParibasanController::class);
    Route::resource('parikan', ParikanController::class);
    Route::resource('word', WordController::class);

    Route::get('/exam/{exam}/download', [ExamController::class, 'download'])->name('exam.download');
    Route::post('/exam/{exam}/upload', [ExamController::class, 'upload'])->name('exam.upload');
    Route::post('/exam/{exam}/user/upload', [ExamController::class, 'uploadUser'])->name('user.upload');
    Route::get('/exam/{exam}/user', [ExamController::class, 'user'])->name('exam.user');
    Route::get('/exam/{exam}/user/export', [ExamController::class, 'userExport'])->name('exam.user.export');
    Route::delete('/exam/{exam}/question', [ExamController::class, 'deleteAllQuestion'])->name('exam.deleteall');
    Route::get('/attempt/{attempt}/destroy', [AttemptController::class, 'destroy'])->name('attempt.delete');
});
