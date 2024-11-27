<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionCategory;

class SubscriptionCategoryController extends Controller
{
    public function index()
    {


        return view('backend.layout.subscription category.create');
    }



    public function create(Request $request)
   {
    $request->validate(
        ['package_name'=>'required|in:Monthly,For 3 Months,For 6 Months,Annually',
        'package_category'=>'required|in:Month,3 Months,6 Months,year',
        'package_duration'=>'required|in:30,90,180,365',
        'description'=>'required',
        'rate'=>'required|min:2',
        'package_saving'=>'nullable|string'

    ],
        ['required'=>'Fill with valid information']
    );

    $data=new SubscriptionCategory();




        if($request->package_name=='Monthly' && $request->package_category=='Month' && $request->package_duration==30){
            $data->package_name=$request->package_name;
            $data->package_category=$request->package_category;
            $data->package_duration=$request->package_duration;
            $data->description=$request->description;
            $data->rate=$request->rate;
            $data->package_saving=$request->package_saving;
            $data->save();
            session()->flash('success', 'Form Submission is done successfully!');
        }
        elseif($request->package_name=='Monthly' && !$request->package_category=='Month' && !$request->package_duration==30)
        {

        session()->flash('success', 'The package values are not matching with each other');
        }






   if($request->package_name=='For 3 Months' && $request->package_category=='3 Months' && $request->package_duration==90){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form Submission is done successfully!');
}
elseif($request->package_name=='For 3 Months' && !$request->package_category=='3 Months' && !$request->package_duration==90)
{

session()->flash('success', 'The package values are not matching with each other');
}






if($request->package_name=='For 6 Months' && $request->package_category=='6 Months' && $request->package_duration==180){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form Submission is done successfully!');

}
elseif($request->package_name=='For 6 Months' && !$request->package_category=='6 Months' && !$request->package_duration==180)
{

session()->flash('success', 'The package values are not matching with each other');
}




if($request->package_name=='Annually' && $request->package_category=='year' && $request->package_duration==365){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form Submission is done successfully!');
}
elseif($request->package_name=='Annually' && !$request->package_category=='year' && !$request->package_duration==365)
{

session()->flash('success', 'The package values are not matching with each other');
}



    return redirect()->back();

   }


   public function display()
   {

    $data=SubscriptionCategory::all();

    return view('backend.layout.subscription category.display',['datas'=>$data]);
   }






   public function edit($id)
   {

    $data=SubscriptionCategory::find($id);
    return view('backend.layout.subscription category.edit',['data'=>$data]);
   }












   public function update(Request $request)
   {
    $request->validate(
        ['package_name'=>'required|in:Monthly,For 3 Months,For 6 Months,Annually',
        'package_category'=>'required|in:Month,3 Months,6 Months,year',
        'package_duration'=>'required|in:30,90,180,365',
        'description'=>'required',
        'rate'=>'required|min:2',
        'package_saving'=>'nullable|string'

    ],
        ['required'=>'Fill with valid information']
    );

    $data=SubscriptionCategory::find($request->id);
    $data->id=$request->id;


        if($request->package_name=='Monthly' && $request->package_category=='Month' && $request->package_duration==30){
            $data->package_name=$request->package_name;
            $data->package_category=$request->package_category;
            $data->package_duration=$request->package_duration;
            $data->description=$request->description;
            $data->rate=$request->rate;
            $data->package_saving=$request->package_saving;
            $data->save();
            session()->flash('success', 'Form Submission is done successfully!');
        }
        elseif($request->package_name=='Monthly' && !$request->package_category=='Month' && !$request->package_duration==30)
        {

        session()->flash('success', 'Form has been updated  successfully!');
        }






   if($request->package_name=='For 3 Months' && $request->package_category=='3 Months' && $request->package_duration==90){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form Submission is done successfully!');
}
elseif($request->package_name=='For 3 Months' && !$request->package_category=='3 Months' && !$request->package_duration==90)
{

session()->flash('success', 'Form has been updated  successfully!');
}






if($request->package_name=='For 6 Months' && $request->package_category=='6 Months' && $request->package_duration==180){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form Submission is done successfully!');

}
elseif($request->package_name=='For 6 Months' && !$request->package_category=='6 Months' && !$request->package_duration==180)
{

session()->flash('success', 'Form has been updated  successfully!');
}




if($request->package_name=='Annually' && $request->package_category=='year' && $request->package_duration==365){
    $data->package_name=$request->package_name;
    $data->package_category=$request->package_category;
    $data->package_duration=$request->package_duration;
    $data->description=$request->description;
    $data->rate=$request->rate;
    $data->package_saving=$request->package_saving;
    $data->save();
    session()->flash('success', 'Form has been updated  successfully!');
}
elseif($request->package_name=='Annually' && !$request->package_category=='year' && !$request->package_duration==365)
{

session()->flash('success', 'The package values are not matching with each other');
}



    return redirect()->back();

   }

}