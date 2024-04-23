<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; 
use App\Models\User;


Route::get('/', function () {
    return Inertia::render('Home'); 
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::paginate(10)->through(fn($user) => [
            'id' => $user->id,
            'name' => $user->name, 
            'email' => $user->email
        ])
    ]); 
});

Route::get('/settings', function () {
    return Inertia::render('Settings'); 
});

Route::post('/logout', function() {
    dd("You are logout"); 
}); 

