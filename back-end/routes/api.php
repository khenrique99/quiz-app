<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;

Route::group([

  'middleware' => 'api',
  'prefix' => 'auth'

], function ($router) {

  Route::post('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
  Route::post('/me', [AuthController::class, 'me'])->name('me');
});

Route::post('/user', [UserController::class, 'create'])->name('create');
Route::put('/user/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/user/{id}', [UserController::class, 'delete'])->name('delete');
Route::get('/user/{id}', [UserController::class, 'get'])->name('get');
Route::get('/user', [UserController::class, 'show'])->name('show');

Route::get('/questionListEasy', [QuestionController::class, 'questionListEasy'])->name('questionListEasy');
Route::get('/questionListEasy/{id}', [QuestionController::class, 'getQuestions'])->name('getQuestions');
