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
        'team1_score'=>'required',
        'team2_score'=>'required',
        'team1_logo'=>'required',
        'team2_logo'=>'required',
        'winner'=>'required',
        'play_date'=>'required'
    ],
        ['required'=>'Fill with valid information']
    );

    $data=new ScoreCard();
    $data->sports_type=$request->sports_type;
    $data->team1_name=$request->team1_name;
    $data->team2_name=$request->team2_name;
    $data->team1_score=$request->team1_score;
    $data->team2_score=$request->team2_score;
    $data->team1_logo=$request->team1_logo;
    $data->team2_logo=$request->team2_logo;
    $data->winner=$request->winner;
    $data->play_date=$request->play_date;
    $data->save();
    return redirect()->back();

   }
}