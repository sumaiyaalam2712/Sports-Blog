<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Blog;

class SearchController extends Controller{
//{public function index(){
    //$social_media=SocialMedia::all();
    //$all_news=Blog::orderBy('creation_period','desc')->paginate(8);
    //return view('frontend.layout.search',['social_medias'=>$social_media,'all_newses'=>$all_news]);
//}



public function search(Request $request)
{

    $social_media=SocialMedia::all();
    $search=$request->search;
    $data=Blog::where('news_type','like','%'.$search.'%')
    ->orWhere('sports_type','like','%'.$search.'%')
    ->orWhere('headline','like','%'.$search.'%')
    ->orWhere('sub_headline','like','%'.$search.'%')
    ->orWhere('description','like','%'.$search.'%')
    ->orderBy('creation_period','desc')
    ->paginate(8);
    return view('frontend.layout.search',['social_medias'=>$social_media,'datas'=>$data]);


}
}