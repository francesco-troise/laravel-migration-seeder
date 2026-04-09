<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trains\TrainController;

Route::get('/', [TrainController::class, 'Index']);
