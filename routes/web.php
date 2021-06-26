<?php

use App\Http\Livewire\Taskcomponet;
use App\Http\Livewire\Testexample;
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

Route::get('/', Testexample::class);

Route::get('/task/{name}', Taskcomponet::class);
