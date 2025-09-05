<?php

use App\Http\Controllers\Api\V1\{CompanyController, BranchController, UserController};
use App\Http\Controllers\AuthController;

Route::prefix('api/v1')->group(function () {
  Route::post('auth/login', [AuthController::class, 'login']);

  Route::middleware(['auth:sanctum','branch'])->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::get('company', [CompanyController::class, 'show']);
    Route::get('branches', [BranchController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
  });
});