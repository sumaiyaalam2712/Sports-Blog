<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScoreCard;

class IndexController extends Controller
{
  public function index()
  {
    $data=ScoreCard::all();
    return view('frontend.layout.index',['values'=>$data]);
  }
}