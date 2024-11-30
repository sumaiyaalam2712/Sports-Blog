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
use App\Http\Controllers\web\backend\AdminController;
use App\Http\Controllers\web\frontend\SearchController;

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

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth','isadmin'])->name('dashboard');
Route::get('/', [IndexController::class,'index'])->name('home.index');
Route::get('/blog-details/{slug}', [BlogDetailsController::class,'index'])->name('blog.details.index');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/register', [SignUpController::class, 'index'])->name('register');
Route::get('/search', [SearchController::class,'index'])->name('search.index');
Route::post('/search', [SearchController::class,'search'])->name('search.search');

Route::prefix('/dashboard/blog')->middleware(['auth','isadmin'])->group(function(){
Route::get('/create-blog', [BlogController::class,'index'])->name('blog.index');
Route::post('/create-blog', [BlogController::class,'create'])->name('blog.create');
Route::get('/blog', [BlogController::class,'display'])->name('blog.display');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update', [BlogController::class,'update'])->name('blog.update');
Route::get('/blog/delete/{id}', [BlogController::class,'delete'])->name('blog.delete');
});

Route::prefix('/dashboard/score')->middleware(['auth','isadmin'])->group(function(){

Route::get('/create-score', [ScoreController::class,'index'])->name('score.index');
Route::post('/create-score', [ScoreController::class,'create'])->name('score.create');
Route::get('/score', [ScoreController::class,'display'])->name('score.display');
Route::get('/score/edit/{id}', [ScoreController::class,'edit'])->name('score.edit');
Route::post('/score/update', [ScoreController::class,'update'])->name('score.update');
Route::get('/score/delete/{id}', [ScoreController::class,'delete'])->name('score.delete');
});


Route::prefix('/dashboard/social')->middleware(['auth','isadmin'])->group(function(){
Route::get('/create-social-media', [SocialMediaController::class,'index'])->name('social.media.index');
Route::post('/create-social-media', [SocialMediaController::class,'create'])->name('social.media.create');
Route::get('/socialmedia', [SocialMediaController::class,'display'])->name('social.media.display');
Route::get('/socialmedia/edit/{id}', [SocialMediaController::class,'edit'])->name('social.media.edit');
Route::post('/socialmedia/update', [SocialMediaController::class,'update'])->name('social.media.update');
Route::get('/socialmedia/delete/{id}', [SocialMediaController::class,'delete'])->name('social.media.delete');
});


Route::prefix('/dashboard/admin')->middleware(['auth','isadmin'])->group(function(){
Route::get('/create-profile', [ProfileController::class,'index'])->name('profile.index');
Route::post('/create-profile', [ProfileController::class,'create'])->name('profile.create');
Route::get('/create-admin', [AdminController::class,'index'])->name('admin.index');
Route::post('/create-admin', [AdminController::class,'create'])->name('admin.create');

Route::get('/user', [AdminController::class,'display'])->name('user.display');
Route::get('/user/edit/{id}', [AdminController::class,'edit'])->name('user.edit');
Route::post('/user/update', [AdminController::class,'update'])->name('user.update');
Route::get('{id}', [AdminController::class,'delete'])->name('user.delete');
});







Route::prefix('/dashboard/subscription')->middleware(['auth','isadmin'])->group(function(){
Route::get('/create-subscription-category', [SubscriptionCategoryController::class,'index'])->name('subscription.category.index');
Route::post('/create-subscription-category', [SubscriptionCategoryController::class,'create'])->name('subscription.category.create');
Route::get('/subscription', [SubscriptionCategoryController::class,'display'])->name('subscription.display');
Route::get('/subscription/edit/{id}', [SubscriptionCategoryController::class,'edit'])->name('subscription.edit');
Route::post('/subscription/update', [SubscriptionCategoryController::class,'update'])->name('subscription.update');
Route::get('/subscription/delete/{id}', [SubscriptionCategoryController::class,'delete'])->name('subscription.delete');
});







require __DIR__.'/auth.php';