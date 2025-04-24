<?php

use Illuminate\Support\Facades\Route;
use App\Models\jobs;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['job' => jobs::getAll()]);
});


Route::get('/job/{id}', function ($id) {
    $job = jobs::getById($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});