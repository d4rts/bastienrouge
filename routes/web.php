<?php

use BastienRouge\Home\Infrastructure\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
