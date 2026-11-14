<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;



class HomeController extends Controller
{
    Route::get('/', [HomeController::class, 'title'])->name('genre');
}
