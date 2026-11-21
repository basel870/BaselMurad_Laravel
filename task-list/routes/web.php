<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

// Add to DataBase

Route::get('/tasks', [TaskController::class, 'index']);

Route::post('/create', [TaskController::class, 'create']);

// Delete from DataBase

Route::post('/delete/{id}', [TaskController::class, 'destroy']);

// Edit from DataBase

Route::post('/edit/{id}', [TaskController::class, 'edit']);

// Update from DataBase

Route::post('/update', [TaskController::class, 'update']);

Route::get('/app', function() {
    return view('layouts.app');
});

Route::get('/users', [UserController::class, 'index']);

Route::post('/users/create', [UserController::class, 'create']);

Route::post('/users/delete/{id}', [UserController::class, 'destroy']);

Route::post('/users/edit/{id}', [UserController::class, 'edit']);

Route::post('/users/update', [UserController::class, 'update']);
