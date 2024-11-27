<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SocialMedia;

class BlogDetailsController extends Controller
{
    public function index($slug)
    {
        $social_media=SocialMedia::all();
        $details=Blog::where('slug',$slug)->first();

      $related=Blog::orderBy('creation_period','desc')->paginate(3);


        $details_image=array(explode(',',$details->image));
      return view('frontend.layout.blog_details',['social_medias'=>$social_media,'detail'=>$details,
      'detail_image'=>$details_image,'relateds'=>$related]);
    }
}