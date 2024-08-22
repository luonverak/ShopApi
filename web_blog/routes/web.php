<?php

use App\Http\Controllers\FrontendViewsController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin", "namespace" => "BackendViews"], function () {
    Route::get("/", ["use" => "BackendViewsController@index"]);
});

Route::group(["prefix" => "/"], function () {
    Route::get("/", [FrontendViewsController::class, "index"]);
});
