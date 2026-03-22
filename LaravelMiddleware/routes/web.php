<?php

use Illuminate\Support\Facades\Route;

Route::get('/legal-age', function () {
    return "You are an adult!";
})->middleware('checkAge');
