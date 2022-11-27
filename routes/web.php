<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resources([
    'family' => FamilyController::class,
    'task' => TaskController::class,
]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('auth/google', [\App\Http\Controllers\GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[\App\Http\Controllers\GoogleAuthController::class, 'callbackGoogle']);

Route::get('auth/github', [\App\Http\Controllers\GithubAuthController::class, 'redirect'])->name('github-auth');
Route::get('auth/github/call-back',[\App\Http\Controllers\GithubAuthController::class, 'callbackGitHub']);
