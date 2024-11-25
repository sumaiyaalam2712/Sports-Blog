<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SignUpController extends Controller
{
    public function index()
    {

        $social_media=SocialMedia::all();
      return view('frontend.layout.signup',['social_medias'=>$social_media]);
    }
}