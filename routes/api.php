<?php

use Illuminate\Support\Facades\Route;

Route::prefix("v1")->group(function () {
    Route::prefix("tasks")->namespace("\App\Api\Task\Controllers")->group(function () {
        Route::get("/", "TaskController@index");
        Route::post("/", "TaskController@store");
    });
});