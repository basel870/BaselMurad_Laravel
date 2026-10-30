<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $name = 'Basel';
    /*
        return view('about') -> with('name', $name);    method 1
        return view('about', ['name' => $name]);        method 2
        return view('about', compact('name'));          method 3
    */
    return view('about', compact('name'));
});
