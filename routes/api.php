<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('create', [UserController::class, 'store']);
    Route::delete('delete/{id}', [UserController::class, 'destroy']);
    Route::get('show/{id}', [UserController::class, 'show']);
    Route::put('update/{id}', [UserController::class, 'update']);
});
Route::post('/login', [AuthController::class,"login"]);


Route::get('/pivot', function(){
    $booking = \App\Models\Booking::first();

    $destiantion = \App\Models\Destination::first();

    $destiantion->bookings()->sync([1 => ['qty' => 10, 'sub_total' => 5000]]) ;
});
