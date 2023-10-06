<?php

use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\featureController;
use App\Http\Controllers\Admin\homeController as AdminHomeController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\teamController;
use App\Http\Controllers\Admin\testmonialController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('list', [AdminHomeController::class, 'list']);
Route::get('feature/list', [featureController::class, 'featureList']);
Route::get('team/list',[teamController::class,'teamList']);
Route::get('service/list',[serviceController::class,'serviceList']);
Route::get('testmonial/list',[testmonialController::class,'testmonialList']);
Route::get('contact/list',[contactController::class,'contactList']);
Route::post('add', [contactController::class, 'add']);
