<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return redirect('/customers');
});

Route::resource('customers', CustomerController::class);