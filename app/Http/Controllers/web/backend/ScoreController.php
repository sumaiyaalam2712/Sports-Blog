<?php

namespace App\Http\Controllers\web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScoreCard;

class ScoreController extends Controller
{
    public function index()
    {
        return view('backend.layout.score card.create');
    }



    public function create(Request $request)
   {
    $request->validate(
        ['sports_type'=>'required',
        'team1_name'=>'required',
        'team2_name'=>'required',
        'team1_score'=>'required|regex:/^[+-]?\d+(\.\d+)?$/',
        'team2_score'=>'required|regex:/^[+-]?\d+(\.\d+)?$/',
        'team1_logo'=>'required|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp',
        'team2_logo'=>'required|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp',
        'winner'=>'required',
        'play_date'=>'required|date'
    ],
        ['required'=>'Fill with valid information']
    );

    $data=new ScoreCard();

    $data->sports_type=$request->sports_type;
    $data->team1_name=$request->team1_name;
    $data->team2_name=$request->team2_name;
    $data->team1_score=$request->team1_score;
    $data->team2_score=$request->team2_score;
    $team1logo = time().'.'.$request->team1_logo->extension();
    $request->team1_logo->move(public_path('backend'), $team1logo);
    $data->team1_logo=$team1logo;
    $team2logo = time().'.'.$request->team2_logo->extension();
    $request->team2_logo->move(public_path('backend'), $team2logo);
    $data->team2_logo=$team2logo;
    $data->winner=$request->winner;
    $data->play_date=$request->play_date;
    $data->save();
    try {

        session()->flash('success', 'Form Submission is done successfully!');
    } catch (\Exception $e) {

        session()->flash('error', 'There was an error submitting the form. Please try again.');
    }
    return redirect()->back();

   }
}
