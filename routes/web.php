<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Create;
use App\Http\Livewire\Delete;
use App\Http\Livewire\Index;
use App\Http\Livewire\Posts\PostCreate;
use App\Http\Livewire\Show;
use App\Http\Livewire\ShowPosts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
