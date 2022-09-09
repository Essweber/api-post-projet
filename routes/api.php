<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\HomeController;

Route::get('/', HomeController::class);

