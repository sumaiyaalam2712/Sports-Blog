<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Yajra\DataTables\Facades\DataTables;


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









    public function display(Request $request)

    {

        if ($request->ajax()) {

            $data=User::where('role','user')->get();

            return Datatables::of($data)


                    ->addColumn('action', function ($data) {

                        return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                      <a href="' . route('user.edit',  $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                      <i class="bi bi-pencil"></i>
                                      Edit</a>
                                     <a href="' . route('user.delete',  $data->id) . '" type="button" class="btn btn-danger text-white" title="Delete">
                                      <i class="bi bi-pencil"></i>
                                      Delete</a>
                                    </div>';
                    })




                    ->rawColumns(['action'])

                    ->make(true);

        }



        return view('backend.layout.user.display');
}




public function delete($id)
{
$data=User::find($id);
$data->delete();
session()->flash('success', 'Succesfully Deleted');
return redirect()->back();
}


public function edit($id)
   {

    $data=User::find($id);
    return view('backend.layout.user.edit',['data'=>$data]);
   }


   public function update(Request $request)
   {
    $request->validate(
        [
           'name'=>'required|string',
           'email'=>'required|email',

        'phone'=>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,phone|min:10',
        'photo'=>'nullable||image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:3072',
        'address'=>'nullable',
       'subscription_status'=>'nullable|in:active,end,cancelled,inactive'],
        ['required'=>'Fill with valid information']
    );

    $data=User::find($request->id);
    $data->id=$request->id;
    $data->name=$request->name;
    $data->email=$request->email;

    $data->phone=$request->phone;

    $data->address=$request->address;
    $data->subscription_status=$request->subscription_status;

    $data->save();
    //session()->flash('success','New Admin is Assigned successfully');
    try {

        session()->flash('success', 'User Info is successfully updated!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error submitting the form. Please try again.');
    }
    return redirect()->back();


   }
}