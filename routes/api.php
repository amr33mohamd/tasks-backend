<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('api')->group(function () {
    Route::get('/tasks', 'App\Http\Controllers\Api\TaskController@index');
});
