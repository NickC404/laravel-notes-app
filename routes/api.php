<?php

use App\Http\Controllers\Api\FolderController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NoteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('notes', NoteController::class);
Route::apiResource('folders', FolderController::class);
Route::apiResource('tags', TagController::class);
