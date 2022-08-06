<?php

use App\Http\Controllers\ToastrController;
use Illuminate\Support\Facades\Route;





Route::get('/', [ToastrController::class, 'toast']);