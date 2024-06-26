<?php

use App\Http\Controllers\AdvertAddressController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\AdvertPhotoController;
use App\Http\Controllers\AdvertStatusController;
use App\Http\Controllers\AnimalTypeController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserActionController;
use App\Http\Controllers\UserActionTypeController;
use App\Http\Controllers\UserBlockingController;
use App\Http\Controllers\UserController;
use App\Models\UserActionType;
use Illuminate\Support\Facades\Route;

Route::prefix('roles')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::get('/{id}', [RoleController::class, 'show']);
});

Route::prefix('advert-address')->group(function () {
    Route::get('/', [AdvertAddressController::class, 'index']);
    Route::get('/{id}', [AdvertAddressController::class, 'show']);
    Route::post('/', [AdvertAddressController::class, 'store']);
    Route::put('/{id}', [AdvertAddressController::class, 'update']);
    Route::delete('/{id}', [AdvertAddressController::class, 'destroy']);
});

Route::prefix('adverts')->group(function () {
    Route::get('/', [AdvertController::class, 'index']);
    Route::get('/{id}', [AdvertController::class, 'show']);
    Route::post('/', [AdvertController::class, 'store']);
    Route::put('/{id}', [AdvertController::class, 'update']);
    Route::delete('/{id}', [AdvertController::class, 'destroy']);
});

Route::prefix('advert-photos')->group(function () {
    Route::get('/', [AdvertPhotoController::class, 'index']);
    Route::get('/{id}', [AdvertPhotoController::class, 'show']);
    Route::post('/', [AdvertPhotoController::class, 'store']);
    Route::put('/{id}', [AdvertPhotoController::class, 'update']);
    Route::delete('/{id}', [AdvertPhotoController::class, 'destroy']);
});

Route::prefix('advert-statuses')->group(function () {
    Route::get('/', [AdvertStatusController::class, 'index']);
    Route::get('/{id}', [AdvertStatusController::class, 'show']);
});

Route::prefix('animal-types')->group(function () {
    Route::get('/', [AnimalTypeController::class, 'index']);
    Route::get('/{id}', [AnimalTypeController::class, 'show']);
    Route::post('/', [AnimalTypeController::class, 'store']);
    Route::put('/{id}', [AnimalTypeController::class, 'update']);
    Route::delete('/{id}', [AnimalTypeController::class, 'destroy']);
});

Route::prefix('localities')->group(function () {
    Route::get('/', [LocalityController::class, 'index']);
    Route::get('/{id}', [LocalityController::class, 'show']);
    Route::post('/', [LocalityController::class, 'store']);
    Route::put('/{id}', [LocalityController::class, 'update']);
    Route::delete('/{id}', [LocalityController::class, 'destroy']);
});

Route::prefix('regions')->group(function () {
    Route::get('/', [RegionController::class, 'index']);
    Route::get('/{id}', [RegionController::class, 'show']);
    Route::post('/', [RegionController::class, 'store']);
    Route::put('/{id}', [RegionController::class, 'update']);
    Route::delete('/{id}', [RegionController::class, 'destroy']);
});

Route::prefix('user-actions')->group(function () {
    Route::get('/', [UserActionController::class, 'index']);
    Route::get('/{id}', [UserActionController::class, 'show']);
    Route::post('/', [UserActionController::class, 'store']);
    Route::put('/{id}', [UserActionController::class, 'update']);
    Route::delete('/{id}', [UserActionController::class, 'destroy']);
});

Route::prefix('user-action-types')->group(function () {
    Route::get('/', [UserActionTypeController::class, 'index']);
    Route::get('/{id}', [UserActionType::class, 'show']);
});

Route::prefix('user-blockings')->group(function () {
    Route::get('/', [UserBlockingController::class, 'index']);
    Route::get('/{id}', [UserBlockingController::class, 'show']);
    Route::post('/', [UserBlockingController::class, 'store']);
    Route::put('/{id}', [UserBlockingController::class, 'update']);
    Route::delete('/{id}', [UserBlockingController::class, 'destroy']);
});

Route::prefix('users')->group(function () {
    Route::get('/login/{login}', [UserController::class, 'getByLogin']);
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});