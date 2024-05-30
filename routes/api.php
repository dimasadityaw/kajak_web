<?php

use App\Http\Controllers\Api\ArananController;
use App\Http\Controllers\Api\AttemptController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ParibasanController;
use App\Http\Controllers\Api\ParikanController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\TembangController;
use App\Http\Controllers\Api\WordController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('/exam', AttemptController::class)->parameter('exam', 'attempt');
Route::apiResource('/exam/{attempt}/question', QuestionController::class);
Route::get('aranan', [ArananController::class, 'index']);
Route::get('paribasan', [ParibasanController::class, 'index']);
Route::get('parikan', [ParikanController::class, 'index']);
Route::get('tembang', [TembangController::class, 'index']);

Route::get('paramasastra', [HomeController::class, 'paramasastra']);

Route::post('translate', WordController::class);
