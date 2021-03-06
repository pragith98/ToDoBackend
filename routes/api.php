<?php

use App\Http\Controllers\TaskController;
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

Route::post('/store',[TaskController::class, 'storeTask']);

Route::get('/allTask',[TaskController::class, 'getAllTask']);

Route::get('/getTask/{id}',[TaskController::class, 'getTask']);

Route::put('/updateTask/{id}',[TaskController::class, 'updateTask']);

Route::delete('/deleteTask/{id}',[TaskController::class, 'deleteTask']);

Route::put('/statusUpdate/{id}',[TaskController::class, 'statusUpdate']);