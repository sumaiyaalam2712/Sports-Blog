<?php

namespace App\Http\Controllers\web\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    return view('frontend.layout.index');
  }
}