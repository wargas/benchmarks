<?php

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request) {
    return User::limit(10)->get();
});

Route::get('/insert', function(Request $request) {
    return User::factory(1)->create();
});

Route::get('/count', function(Request $request) {
    return User::count("*");
});

Route::get('/reset', function(Request $request) {
    return User::where('id', '>=', 1)->delete();
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
