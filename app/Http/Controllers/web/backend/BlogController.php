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
        'description'=>'required',
        'image'=>'required'],
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

    $data=Blog::orderBy('creation_period','desc')->get();
    return view('backend.layout.blog.display',['datas'=>$data]);
   }


   public function edit($id)
   {

    $data=Blog::find($id);
    return view('backend.layout.blog.edit',['data'=>$data]);
   }



   public function update(Request $request)
   {
    $request->validate(
        ['sports_type'=>'required|string|min:4',
        'news_type'=>'required|in:general,top,featured,transfer news|min:3',
        'headline'=>'required|min:4|max:200',
        'sub_headline'=>'required|min:4|max:200',
        'description'=>'required',
   ],
        ['required'=>'Fill with valid information']
    );

    $data=Blog::find($request->id);
    $data->id=$request->id;
    $data->sports_type=$request->sports_type;
    $data->news_type=$request->news_type;
    $data->headline=$request->headline;
    $data->sub_headline=$request->sub_headline;
    $data->slug=Str::slug($request->headline);
    $data->description=$request->description;
    if($request->file('image')){
        $multiple=[];
    foreach($request->image as $value){
        $imageName = time().uniqid().'.'.$value->extension();
        $value->move(public_path('backend'), $imageName);
        $multiple[]=$imageName;
    }
    $data->image= implode(',' ,$multiple);
        }

    $data->save();

    try {

        session()->flash('success', 'Form has been Updated successfully!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error updating the form. Please try again.');
    }

return redirect()->back();

   }




   public function delete($id)
   {

    $data=Blog::find($id);
    $data->delete();
    try {

        session()->flash('success', 'Form has been Updated successfully!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error updating the form. Please try again.');
    }
    return redirect()->back();

   }
}