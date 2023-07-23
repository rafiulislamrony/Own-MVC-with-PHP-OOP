<?php

use App\Services\Route;
use App\Middleware\{
    Auth,
    Guest
};
 
Route::get('', 'HomeController', 'index');
Route::get('login', 'LoginController', 'index',[Guest::class]);
Route::post('submit-login', 'LoginController', 'login', 'POST',[Guest::class]);
Route::get('register', 'RegisterController', 'index',[Guest::class]);
Route::post('submit-register', 'RegisterController', 'register', 'POST',[Guest::class]);
Route::get('logout', 'DashboardController', 'logout', [Auth::class]);
Route::get('dashboard', 'DashboardController', 'index', [Auth::class]);