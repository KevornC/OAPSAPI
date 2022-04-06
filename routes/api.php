<?php

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

Route::get('/get/relation',[\App\Http\Controllers\NecessaryController::class, 'relationType']);

//Registration
Route::post('/create/parent',[\App\Http\Controllers\ParentController::class, 'store']);
Route::post('/login',[\App\Http\Controllers\HomeController::class, 'index']);
//Parent routes
Route::post('/search/student',[\App\Http\Controllers\ParentController::class, 'searchChild']);
Route::post('/create/student',[\App\Http\Controllers\ParentController::class, 'addChild']);
Route::get('/relationship/{parent}/{child}',[\App\Http\Controllers\ParentController::class, 'findRelationship']);

Route::get('/relationships',[\App\Http\Controllers\ParentController::class, 'allRelationship']);
Route::get('/view/voucher{id}',[\App\Http\Controllers\ParentController::class, 'allEV']);
Route::get('/verify/parent/{id}/{id1}',[\App\Http\Controllers\ParentController::class, 'verifyRelationship']);
Route::get('/verify/parent/deny/{id}/{id1}',[\App\Http\Controllers\ParentController::class, 'verifyRelationshipDeny']);
Route::get('/find/all/relationships/{id}',[\App\Http\Controllers\ParentController::class, 'findAllRelationships']);
Route::get('/voucher/details',[\App\Http\Controllers\ParentController::class, 'eVoucherDetails']);
Route::post('/payment',[\App\Http\Controllers\eVoucherPaymentDetailsController::class, 'store']);

//Canteen Staff routes
Route::get('/search/voucher/{id}',[\App\Http\Controllers\NecessaryController::class, 'searchVN']);
Route::get('/clock/{csID}/{id}',[\App\Http\Controllers\NecessaryController::class, 'clock']);
Route::post('/modify/password/{id}',[\App\Http\Controllers\NecessaryController::class, 'changePassword']);

//User routes
Route::get('show/student',[\App\Http\Controllers\StudentController::class, 'index']);
Route::post('/create/student',[\App\Http\Controllers\StudentController::class, 'store']);
Route::get('/edit/student/{id}',[\App\Http\Controllers\StudentController::class, 'edit']);
Route::post('/update/student/{id}',[\App\Http\Controllers\StudentController::class, 'update']);
Route::get('/show/staff',[\App\Http\Controllers\CanteenStaffController::class, 'index']);
Route::post('/create/staff',[\App\Http\Controllers\CanteenStaffController::class, 'store']);
Route::get('/edit/staff/{id}',[\App\Http\Controllers\CanteenStaffController::class, 'edit']);
Route::post('/update/staff/{id}',[\App\Http\Controllers\CanteenStaffController::class, 'update']);
Route::get('/stats',[\App\Http\Controllers\HomeController::class, 'stats']);
