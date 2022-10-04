<?php

use Illuminate\Support\Facades\Route;
use App\http\Controller\backendController;
use App\Models\User;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/logout', [backendController::class, 'logout'])->name('logout');

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified'
])->group(function () {
  Route::get('/dashboard', function () {
    return view('admin.index');
  })->name('dashboard');

  Route::get('/users', function () {
    $users = User::all();
    return view('admin.users');
  })->name('users');
});
