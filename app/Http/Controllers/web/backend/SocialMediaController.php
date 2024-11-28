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



public function display()
   {

    $data=SocialMedia::all();

    return view('backend.layout.social media.display',['datas'=>$data]);
   }


   public function edit($id)
   {

    $data=SocialMedia::find($id);
    return view('backend.layout.social media.edit',['data'=>$data]);
   }




   public function delete($id)
   {

    $data=SocialMedia::find($id);
    $data->delete();
    try {

        session()->flash('success', 'Form has been deleted successfully!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error deleting the form. Please try again.');
    }
    return redirect()->back();

   }




   public function update(Request $request)
{
 $request->validate(
     ['name'=>'required|string|min:4|max:30',
     'logo'=>'image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:3072',
     'link'=>'required|url'],
     ['required'=>'Fill with valid information']
 );

 $data=SocialMedia::find($request->id);
    $data->id=$request->id;
 $data->name=$request->name;
 if($request->file('logo'))
 {
    $logologo = time().'.'.$request->logo->extension();
 $request->logo->move(public_path('backend'), $logologo);
 $data->logo=$logologo;
 }
 $data->link=$request->link;

 $data->save();
 try {

     session()->flash('success', 'Form is updated successfully!');
 } catch (\Exception $e) {

     session()->flash('error', 'There was an error updating the form. Please try again.');
 }
 return redirect()->back();

}

}