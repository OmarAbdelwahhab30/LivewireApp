<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {

    Route::get("livewire/login", Login::class)->name("login");

    Route::get("livewire/register", Register::class);

});


Route::get("livewire/home", Home::class)->name("home")->middleware("auth");
