<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get(
    '/admin',
    [AdminController::class, 'index']
);
Route::get(
    '/article',
    [ArticleController::class, 'index']
);
Route::get(
    '/cost',
    [CostController::class, 'index']
);
Route::get(
    '/message',
    [MessageController::class, 'index']
);
Route::get(
    '/patient',
    [PatientController::class, 'index']
);
Route::get(
    '/product',
    [ProductController::class, 'index']
);
Route::get(
    '/psychologist',
    [PsychologistController::class, 'index']
);
Route::get(
    '/psyschedule',
    [PsyScheduleController::class, 'index']
);
Route::get(
    '/rating',
    [RatingController::class, 'index']
);
Route::get(
    '/schedule',
    [ScheduleController::class, 'index']
);
Route::get(
    '/statistic',
    [StatisticController::class, 'index']
);
Route::get(
    '/support',
    [SupportController::class, 'index']
);
Route::get(
    '/user',
    [UserController::class, 'index']
);
Route::get(
    '/video',
    [VideoController::class, 'index']
);
Route::get(
    '/wallet',
    [WalletController::class, 'index']
);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
