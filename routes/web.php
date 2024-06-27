<?php

use App\Http\Controllers\OpenFoodFactsController;
use Illuminate\Support\Facades\Route;

Route::get('/open-food-fact', [OpenFoodFactsController::class, 'index'])->name('home');
