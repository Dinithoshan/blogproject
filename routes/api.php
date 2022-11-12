<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
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


//blog
Route::post('/user/store', [BlogController::class, 'store']);
Route::get('/user/get', [BlogController::class, 'get']);
Route::put('/user/update/{id}', [BlogController::class, 'update']);
Route::delete('/user/delete/{id}', [BlogController::class, 'delete']);

//Post

Route::post('/post/store', [PostController::class, 'create']);//creation
Route::get('/post/get/{id}', [PostController::class, 'get']);//retrive
Route::put('/post/update/{id}', [PostController::class, 'update']);//update
Route::delete('/post/delete/{id}', [PostController::class, 'delete']);//delete
