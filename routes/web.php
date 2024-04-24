<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Request;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    $users =
        User::query()
        ->when(Request::input('search'), function ($query, $search) {
            $query->where('name', 'like', "%$search%");
        })
        ->latest()
        ->paginate(10); 
    return Inertia::render('Users/Index', [
        'users' =>
        $users
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]), 
        'filters' => Request::only(['search'])
    ]);
});
Route::get('/users/create', function() {
    return Inertia::render('Users/Create');
}); 
Route::post('/users', function() {
    sleep(3); 
    $attributes = Request::validate([
        'name' => 'required',
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:6']
    ]); 
    User::create($attributes); 

    return redirect('/users'); 
}); 

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd("You are logout");
});
