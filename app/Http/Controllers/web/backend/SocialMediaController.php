<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
  public function index()
{
    return view('backend.layout.social media.create');
}



public function create(Request $request)
{
 $request->validate(
     ['name'=>'required|string|min:4|max:30',
     'logo'=>'required|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:3072',
     'link'=>'required|url'],
     ['required'=>'Fill with valid information']
 );

 $data=new SocialMedia();
 $data->name=$request->name;
 $logologo = time().'.'.$request->logo->extension();
 $request->logo->move(public_path('backend'), $logologo);
 $data->logo=$logologo;
 $data->link=$request->link;

 $data->save();
 try {

     session()->flash('success', 'Form Submission is done successfully!');
 } catch (\Exception $e) {

     session()->flash('error', 'There was an error submitting the form. Please try again.');
 }
 return redirect()->back();

}
}