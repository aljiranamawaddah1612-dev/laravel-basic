<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Student', function () {
    return view('Student.index', ['title' => ' STUDENT']);
});

Route::get('/Student/create', function () {
    return view('Student.create', ['title' => ' CREATE STUDENT']);
});
