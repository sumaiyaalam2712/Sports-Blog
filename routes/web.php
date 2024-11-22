<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\backend\DashboardController;
use App\Http\Controllers\web\backend\BlogController;
use App\Http\Controllers\web\backend\ScoreController;
use App\Http\Controllers\web\frontend\IndexController;
use App\Http\Controllers\web\frontend\LoginController;
use App\Http\Controllers\web\frontend\BlogDetailsController;
use App\Http\Controllers\web\frontend\SignUpController;

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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/create-blog', [BlogController::class,'index'])->name('blog.index');
Route::post('/create-blog', [BlogController::class,'create'])->name('blog.create');
Route::get('/create-score', [ScoreController::class,'index'])->name('score.index');
Route::post('/create-score', [ScoreController::class,'create'])->name('score.create');


Route::get('/', [IndexController::class,'index'])->name('home.index');
    Route::get('/blog-details/{id}', [BlogDetailsController::class,'index'])->name('blog.details.index');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/register', [SignUpController::class, 'index'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';