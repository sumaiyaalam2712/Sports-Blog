<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {

        return view('backend.layout.admin.create');
    }




    public function create(Request $request)
    {
     $request->validate(
         [
            'name'=>'required|string',
            'email'=>'required|email',
            'role'=>'in:user,admin',
         'phone'=>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,phone|min:10',
         'photo'=>'nullable||image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:3072',
         'address'=>'nullable',
        'subscription_status'=>'nullable|in:active,end,cancelled,inactive'],
         ['required'=>'Fill with valid information']
     );

     $data=new User();
     $data->name=$request->name;
     $data->email=$request->email;
     $data->password=Hash::make($request->password);
     $data->role=$request->role;
     $data->phone=$request->phone;
     if($request->file('image'))
     {
     $imageName = time().'.'.$request->photo->extension();
     $request->photo->move(public_path('backend'), $imageName);
     $data->photo= $imageName;
     }
     $data->address=$request->address;

     $data->save();
     //session()->flash('success','New Admin is Assigned successfully');
     try {

         session()->flash('success', 'New Admin is Assigned successfully!');
     } catch (\Exception $e) {

         session()->flash('error', 'There was an error submitting the form. Please try again.');
     }
     return redirect()->back();


    }
}