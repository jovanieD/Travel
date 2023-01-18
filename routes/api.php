<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
=======
use App\Http\Controllers\AuthController;
>>>>>>> 832eb667ecc73fd5f0e708b808396489f61aeb1d

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
<<<<<<< HEAD


// Route::middleware('auth:sanctum')->group(function () {
    Route::post('create', [UserController::class, 'store']);
    Route::delete('delete/{id}', [UserController::class, 'destroy']);
    Route::get('show/{id}', [UserController::class, 'show']);
    Route::put('update/{id}', [UserController::class, 'update']);
// });
=======
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [AuthController::class,"login"]);
Route::get('/show', [AuthController::class,"index"]);
>>>>>>> 832eb667ecc73fd5f0e708b808396489f61aeb1d
