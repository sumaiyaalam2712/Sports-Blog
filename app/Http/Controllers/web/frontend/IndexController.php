<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScoreCard;
use App\Models\Blog;
use App\Models\SubscriptionCategory;

class IndexController extends Controller
{
  public function index()
  {
    $score=ScoreCard::orderBy('play_date','desc')->take(20)->get();
    $all=Blog::orderBy('creation_period','desc')->paginate(3);
    $top=Blog::where('news_type','top')->orderBy('creation_period','desc')->take(4)->get();
    $top2=Blog::where('news_type','top')->orderBy('creation_period','desc')->skip(1)->take(2)->get();
    $top1=Blog::where('news_type','top')->orderBy('creation_period','desc')->first();
    $transfer1=Blog::where('news_type','transfer news')->orderBy('creation_period','desc')->first();
    $transfer2=Blog::where('news_type','transfer news')->orderBy('creation_period','desc')->skip(1)->take(4)->get();
    $feature=Blog::where('news_type','featured')->orderBy('creation_period','desc')->take(2)->get();
    $subscription=SubscriptionCategory::all();

    return view('frontend.layout.index',['scores'=>$score,'all_newses'=>$all,'tops'=>$top,'toptwo'=>$top2,'top1'=>$top1,'transfer1'=>$transfer1,'transfertwo'=>$transfer2,'features'=>$feature,'subscriptions'=>$subscription]);
  }
}
