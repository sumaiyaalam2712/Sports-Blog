<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Str;
class BlogController extends Controller
{
   public function index()
   {
    return view('backend.layout.blog.create');
   }


   public function create(Request $request)
   {
    $request->validate(
        ['sports_type'=>'required',
        'news_type'=>'required',
        'headline'=>'required',
        'sub_headline'=>'required',
        //'slug'=>'unique:blogs,slug',
        'description'=>'required'],
        ['required'=>'Fill with valid information']
    );

    $data=new Blog();
    $data->sports_type=$request->sports_type;
    $data->news_type=$request->news_type;
    $data->headline=$request->headline;
    $data->sub_headline=$request->sub_headline;
    $data->slug=Str::slug($request->headline);
    $data->description=$request->description;
    $multiple=[];
foreach($request->image as $value){
    $imageName = time().'.'.$value->extension();
    $value->move(public_path('backend'), $imageName);
    $multiple[]=$imageName;
}
$data->image= json_encode( $multiple);
    $data->creation_period=Carbon::now();
    $data->save();
    //session()->flash('success','Form Submission is done');
    try {

        session()->flash('success', 'Form Submission is done successfully!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error submitting the form. Please try again.');
    }
    return redirect()->back();


   }
}