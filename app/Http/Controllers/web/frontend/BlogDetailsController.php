<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogDetailsController extends Controller
{
    public function index($id)
    {

        $details=Blog::find($id);
        $details_image=array(explode(',',$details->image));
      return view('frontend.layout.blog_details',['detail'=>$details,'detail_image'=>$details_image]);
    }
}