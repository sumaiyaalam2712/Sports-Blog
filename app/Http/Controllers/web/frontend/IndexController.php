<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScoreCard;
use App\Models\Blog;
use App\Models\SubscriptionCategory;
use App\Models\SocialMedia;

class IndexController extends Controller
{
  public function index()
  {
    $social_media=SocialMedia::all();
    $score=ScoreCard::orderBy('play_date','desc')->take(20)->get();
    $all_news=Blog::orderBy('creation_period','desc')->paginate(4);



   // $all_images = [];
//
    //foreach ($all as $blog) {
        //$all_images[] = array(explode(',', $blog->image));

   // }






    $top=Blog::where('news_type','top')->orderBy('creation_period','desc')->take(4)->get();
    $top2=Blog::where('news_type','top')->orderBy('creation_period','desc')->skip(1)->take(2)->get();

    $top1=Blog::where('news_type','top')->orderBy('creation_period','desc')->first();
    $top1_image=array(explode(',',$top1->image));

    $transfer1=Blog::where('news_type','transfer news')->orderBy('creation_period','desc')->first();
    $transfer1_image= array(explode(',',$transfer1->image));

    $transfer2=Blog::where('news_type','transfer news')->orderBy('creation_period','desc')->skip(1)->take(2)->get();
    $transfer3=Blog::where('news_type','transfer news')->orderBy('creation_period','desc')->skip(3)->take(2)->get();



    $feature=Blog::where('news_type','featured')->orderBy('creation_period','desc')->take(2)->get();
    $subscription=SubscriptionCategory::all();





    return view('frontend.layout.index',['social_medias'=>$social_media,'scores'=>$score,'all_newses'=>$all_news,'tops'=>$top,
    'toptwo'=>$top2,'top1'=>$top1,'transfer1'=>$transfer1,'transfertwo'=>$transfer2,'features'=>$feature,'subscriptions'=>$subscription,
    'top1_images'=>$top1_image,'transfer1_images'=>$transfer1_image,'transferthree'=>$transfer3]);
  }
}