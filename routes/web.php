<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Layouts.index');
});
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
