<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('{id}', [PostController::class, 'show']);
    Route::post('/', [PostController::class, 'store']);
    Route::put('{id}', [PostController::class, 'update']);
    Route::delete('{id}', [PostController::class, 'destroy']);
    Route::post('{id}/comments', [CommentController::class, 'store']);
});

Route::delete('/comments/{id}', [CommentController::class, 'destroy']);