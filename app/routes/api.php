<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request) {
    $user = User::where('name', 'wargas');
    return User::all();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
