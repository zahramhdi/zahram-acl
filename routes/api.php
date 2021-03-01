<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/user'], function () {
    Route::post('/register', [\thirdly\acl\Http\Controllers\AuthController::class, 'register']);
    Route::post('/login', [\thirdly\acl\Http\Controllers\AuthController::class, 'login']);
    Route::post('/forget-password', [\thirdly\acl\Http\Controllers\AuthController::class, 'forgetPassword']);
});

if (\thirdly\acl\Facades\Acl::need_auth()) {
    Route::middleware(['auth:api','has-permission'])->group(function () {

        Route::get('user/logout', [\thirdly\acl\Http\Controllers\AuthController::class, 'logOut']);
        Route::post('user/get-role', [\thirdly\acl\Http\Controllers\UserController::class, 'getRole']);
        Route::post('user/add-role', [\thirdly\acl\Http\Controllers\UserController::class, 'addRole']);

        Route::group(['prefix' => '/roles'], function () {
            $controller = \thirdly\acl\Http\Controllers\RoleController::class;
            Route::get('/', [$controller, 'index']);
            Route::post('/store', [$controller, 'store']);
            Route::post('/{role}/show', [$controller, 'show']);
            Route::put('/{role}/update', [$controller, 'update']);
            Route::post('/{role}/destroy', [$controller, 'destroy']);

        });
        Route::group(['prefix' => '/permissions'], function () {
            $controller = \thirdly\acl\Http\Controllers\PermissionController::class;
            Route::get('/', [$controller, 'index']);
            Route::post('/store', [$controller, 'store']);

        });
    });
} else {

}

