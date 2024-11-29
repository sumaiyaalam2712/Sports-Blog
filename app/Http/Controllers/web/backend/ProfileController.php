<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {

        return view('backend.layout.profile setting.create');
    }




    public function create(Request $request)
    {
     $request->validate(
         [
            'name'=>'required|string|max:200',
'email'=>'required|email',
         'phone'=>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,phone|min:10',
         'photo'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:3072',
         'address'=>'nullable'
        ],
         ['required'=>'Fill with valid information']
     );

     $data=User::find(auth()->user()->id);
     $data->name=$request->name;
     $data->email=$request->email;

     $data->phone=$request->phone;


     if($request->file('photo'))
     {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend'), $imageName);

     $data->photo= $imageName;
     }
     $data->address=$request->address;

     $data->save();

     try {

         session()->flash('success', 'Your Profile has been updated successfully');
     } catch (\Exception $e) {

         session()->flash('error', 'There was an error updating the form. Please try again.');
     }
     return redirect('/dashboard');


    }
}