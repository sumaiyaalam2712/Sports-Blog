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
        ['sports_type'=>'required|string|min:4',
        'news_type'=>'required|in:general,top,featured,transfer news|min:3',
        'headline'=>'required|min:4|max:200',
        'sub_headline'=>'required|min:4|max:200',
        'slug'=>'unique:blogs,slug',
        'description'=>'required',
        'image'=>'required|max:3072'],
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
    $imageName = time().uniqid().'.'.$value->extension();
    $value->move(public_path('backend'), $imageName);
    $multiple[]=$imageName;
}
$data->image= implode(',' ,$multiple);
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



   public function display()
   {

    $data=Blog::all();
    return view('backend.layout.blog.display',['datas'=>$data]);
   }
}