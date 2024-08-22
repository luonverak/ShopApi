<?php

use App\Http\Controllers\BackendViewsController;
use App\Http\Controllers\FrontendViewsController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin"], function () {
    Route::get("/", [BackendViewsController::class, "index"]);
});
Route::group(["prefix" => "/"], function () {
    Route::get("/", [FrontendViewsController::class, "index"]);
});
