<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogposts_controller;
use App\Http\Controllers\comment;
use App\Http\Livewire\PostBlog;

use App\Http\Livewire\Pages\Blogprofile;
use App\Http\Livewire\Layout\Components;
use App\Http\Livewire\Pages\Profile;
use App\Http\Livewire\Pages\Shopsmain;

use Illuminate\Support\Facades\Auth;
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
Route::get('/',[blogposts_controller::class,'index']);
Route::get('/blogs',[blogposts_controller::class,'main']);
Route::get('/shops', Shopsmain::class);
Route::post('/dashboard',[blogposts_controller::class,'addPost']);
Route::post('/blogpage/{id}', [comment::class,'ajaxRequestPost']);
Route::get('blogpage/{id}', Blogprofile::class);
Route::get('components', Components::class);
Route::get('profile', Profile::class);
Route::post('/dashboard/filegallery',[blogposts_controller::class,'filegallery']);
Route::post('/dashboard/activate/{id}',[blogposts_controller::class,'status']);
Route::post('/dashboard/delete/{id}',[blogposts_controller::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
