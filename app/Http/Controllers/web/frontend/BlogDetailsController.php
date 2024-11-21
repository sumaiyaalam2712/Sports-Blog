<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index()
    {
      return view('frontend.layout.blog_details');
    }
}