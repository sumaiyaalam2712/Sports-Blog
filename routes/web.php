<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\backend\DashboardController;
use App\Http\Controllers\web\backend\BlogController;
use App\Http\Controllers\web\backend\ScoreController;
use App\Http\Controllers\web\frontend\IndexController;
use App\Http\Controllers\web\frontend\LoginController;
use App\Http\Controllers\web\frontend\BlogDetailsController;
use App\Http\Controllers\web\frontend\SignUpController;
use App\Http\Controllers\web\backend\SubscriptionCategoryController;
use App\Http\Controllers\web\backend\SocialMediaController;
use App\Http\Controllers\web\backend\ProfileController;

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

Route::get('/create-social-media', [SocialMediaController::class,'index'])->name('social.media.index');
Route::post('/create-social-media', [SocialMediaController::class,'create'])->name('social.media.create');


Route::get('/create-profile', [ProfileController::class,'index'])->name('profile.index');
Route::post('/create-profile', [ProfileController::class,'create'])->name('profile.create');


Route::post('/create-score', [ScoreController::class,'create'])->name('score.create');
Route::get('/score', [ScoreController::class,'display'])->name('score.display');
Route::get('/create-subscription-category', [SubscriptionCategoryController::class,'index'])->name('subscription.category.index');
Route::post('/create-subscription-category', [SubscriptionCategoryController::class,'create'])->name('subscription.category.create');


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