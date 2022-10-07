<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendController;
use App\Models\User;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/logout', [BackendController::class, 'logout'])->name('logout');

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
    // $users = DB::table('users')->get();
    return view('admin.users' , compact('users'));
  })->name("users");
});

Route::get('/categories' , [CategoryController::class , 'index'])->name('categories');