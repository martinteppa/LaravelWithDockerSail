<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified','administrador']);