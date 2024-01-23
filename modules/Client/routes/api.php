<?php

use Illuminate\Support\Facades\Route;

use Modules\Client\Http\Controllers\ClientController;


Route::get("client",[ClientController::class,'index']);
