<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jenkins-test', function () {
    return view('jenkins-test');
});
