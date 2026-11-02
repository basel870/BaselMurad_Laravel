<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/about', function() {
    $name = 'Basel';
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    /*
        return view('about') -> with('name', $name);    method 1
        return view('about', ['name' => $name]);        method 2
        return view('about', compact('name'));          method 3
    */
    return view('about', compact('name', 'departments'));
});

Route::post('/about', function() {
    $name = $_POST['name'];
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    return view('about', compact('name', 'departments'));
});

Route::get('/tasks', function() {
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact('tasks'));
});

Route::post('/create', function() {
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
    return redirect()->back();
});
