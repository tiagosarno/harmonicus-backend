<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\PsyScheduleController;
use App\Http\Controllers\PsychologistController;

// Public Routes

// GET JWT TOKEN
Route::post('auth/login',[AuthController::class, 'login']);

Route::get('/article/{order}/{pages}/{page}',[ArticleController::class, 'index']);
Route::get('/video/{order}/{pages}/{page}',[VideoController::class, 'index']);
Route::get('/psychologist/{order}/{pages}/{page}',[PsychologistController::class, 'index']);

Route::get('/article/{id}',[ArticleController::class, 'show']);
Route::get('/product/{id}',[ProductController::class, 'show']);
Route::get('/psychologist/{id}',[PsychologistController::class, 'show']);
Route::get('/psyschedule/{id}',[PsyScheduleController::class, 'show']);
Route::get('/rating/{id}',[RatingController::class, 'show']);
Route::get('/video/{id}',[VideoController::class, 'show']);

// Protected Routes

Route::group(['middleware' => ['apiJwt']], function(){

    Route::post('auth/logout',[AuthController::class, 'logout']);

    Route::get('/admin/{order}/{pages}/{page}',[AdminController::class, 'index']);
    Route::prefix('/admin')->group( function(){
        Route::post('/store',[AdminController::class, 'store']);
        Route::get('/{id}', [AdminController::class, 'show']);
        Route::put('/{id}',[AdminController::class, 'update']);
        Route::delete('/{id}',[AdminController::class, 'destroy']);
    });

    Route::prefix('/article')->group( function(){
        Route::post('/store',[ArticleController::class, 'store']);
        Route::put('/{id}',[ArticleController::class, 'update']);
        Route::delete('/{id}',[ArticleController::class, 'destroy']);
    });

    Route::get('/cost/{order}/{pages}/{page}',[CostController::class, 'index']);
    Route::prefix('/cost')->group( function(){
        Route::post('/store',[CostController::class, 'store']);
        Route::get('/{id}',[CostController::class, 'show']);
        Route::put('/{id}',[CostController::class, 'update']);
        Route::delete('/{id}',[CostController::class, 'destroy']);
    });

    Route::get('/message/{order}/{pages}/{page}',[MessageController::class, 'index']);
    Route::prefix('/message')->group( function(){
        Route::post('/store',[MessageController::class, 'store']);
        Route::get('/{id}',[MessageController::class, 'show']);
        Route::put('/{id}',[MessageController::class, 'update']);
        Route::delete('/{id}',[MessageController::class, 'destroy']);
    });

    Route::get('/patient/{order}/{pages}/{page}',[PatientController::class, 'index']);
    Route::prefix('/patient')->group( function(){
        Route::post('/store',[PatientController::class, 'store']);
        Route::get('/{id}',[PatientController::class, 'show']);
        Route::put('/{id}',[PatientController::class, 'update']);
        Route::delete('/{id}',[PatientController::class, 'destroy']);
    });

    Route::get('/product/{order}/{pages}/{page}',[ProductController::class, 'index']);
    Route::prefix('/product')->group( function(){
        Route::post('/store',[ProductController::class, 'store']);
        Route::put('/{id}',[ProductController::class, 'update']);
        Route::delete('/{id}',[ProductController::class, 'destroy']);
    });

    Route::prefix('/psychologist')->group( function(){
        Route::post('/store',[PsychologistController::class, 'store']);
        Route::put('/{id}',[PsychologistController::class, 'update']);
        Route::delete('/{id}',[PsychologistController::class, 'destroy']);
    });

    Route::get('/psyschedule/{order}/{pages}/{page}',[PsyScheduleController::class, 'index']);
    Route::prefix('/psyschedule')->group( function(){
        Route::post('/store',[PsyScheduleController::class, 'store']);
        Route::get('/{id}',[PsyScheduleController::class, 'edit']);
        Route::put('/{id}',[PsyScheduleController::class, 'update']);
        Route::delete('/{id}',[PsyScheduleController::class, 'destroy']);
    });

    Route::get('/rating/{order}/{pages}/{page}',[RatingController::class, 'index']);
    Route::prefix('/rating')->group( function(){
        Route::post('/store',[RatingController::class, 'store']);
        Route::get('/{id}',[RatingController::class, 'edit']);
        Route::put('/{id}',[RatingController::class, 'update']);
        Route::delete('/{id}',[RatingController::class, 'destroy']);
    });

    Route::get('/schedule/{order}/{pages}/{page}',[ScheduleController::class, 'index']);
    Route::prefix('/schedule')->group( function(){
        Route::post('/store',[ScheduleController::class, 'store']);
        Route::get('/{id}',[ScheduleController::class, 'show']);
        Route::put('/{id}',[ScheduleController::class, 'update']);
        Route::delete('/{id}',[ScheduleController::class, 'destroy']);
    });

    Route::get('/statistic/{order}/{pages}/{page}',[StatisticController::class, 'index']);
    Route::prefix('/statistic')->group( function(){
        Route::post('/store',[StatisticController::class, 'store']);
        Route::get('/{id}',[StatisticController::class, 'show']);
        Route::put('/{id}',[StatisticController::class, 'update']);
        Route::delete('/{id}',[StatisticController::class, 'destroy']);
    });

    Route::get('/support/{order}/{pages}/{page}',[SupportController::class, 'index']);
    Route::prefix('/support')->group( function(){
        Route::post('/store',[SupportController::class, 'store']);
        Route::get('/{id}',[SupportController::class, 'show']);
        Route::put('/{id}',[SupportController::class, 'update']);
        Route::delete('/{id}',[SupportController::class, 'destroy']);
    });

    Route::get('/user/{order}/{pages}/{page}',[UserController::class, 'index']);
    Route::prefix('/user')->group( function(){
        Route::post('/store',[UserController::class, 'store']);
        Route::get('/{id}',[UserController::class, 'show']);
        Route::put('/{id}',[UserController::class, 'update']);
        Route::delete('/{id}',[UserController::class, 'destroy']);
    });

    Route::prefix('/video')->group( function(){
        Route::post('/store',[VideoController::class, 'store']);
        Route::put('/{id}',[VideoController::class, 'update']);
        Route::delete('/{id}',[VideoController::class, 'destroy']);
    });

    Route::get('/wallet/{order}/{pages}/{page}',[WalletController::class, 'index']);
    Route::prefix('/wallet')->group( function(){
        Route::post('/store',[WalletController::class, 'store']);
        Route::get('/{id}',[WalletController::class, 'show']);
        Route::put('/{id}',[WalletController::class, 'update']);
        Route::delete('/{id}',[WalletController::class, 'destroy']);
    });
});
