<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\ScoreCard;
use App\Models\SubscriptionCategory;

class DashboardController extends Controller
{
    public function index()
    {
$blog=Blog::count('id');
$score=ScoreCard::count('id');
$subscription=SubscriptionCategory::count('id');
$transfer=Blog::where('news_type','transfer news')->count('id');
$featured=Blog::where('news_type','featured')->count('id');
$general=Blog::where('news_type','general')->count('id');
        return view('backend.layout.dashboard.index',compact('blog','score','subscription','transfer','featured','general'));
    }
}