<?php

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

Route::get('forum', [App\Http\Controllers\ForumController::class, 'index']);

Route::get('forum_comments', [App\Http\Controllers\Forum_CommentsController::class, 'index']);

Route::get('forum_threads', [App\Http\Controllers\Forum_ThreadsController::class, 'index']);

Route::get('signup', [App\Http\Controllers\UsersController::class, 'signup']);

Route::post('/users/store', [App\Http\Controllers\UsersController::class, 'store']);

Route::get('game', [App\Http\Controllers\GameController::class, 'index']);

Route::get('game_tutorials', [App\Http\Controllers\Game_TutorialsController::class, 'index']);

Route::get('users', [App\Http\Controllers\UsersController::class, 'index']);

Route::get('users_preferences', [App\Http\Controllers\Users_PreferencesController::class, 'index']);

Route::get('login', [UsersController::class, 'index'])->name('login');

Route::post('post-login', [UsersController::class, 'postLogin'])->name('login.post'); 

Route::get('dashboard', [UsersController::class, 'dashboard']); 