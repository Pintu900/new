<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{

    public function store(Request $request){
        $request->validate([

        'answer'=>'required'
        ]);
        Answer::create([
            'user_id'=>auth()->user()->id,
            'answer'=>$request->answer,
            'question_id'=>$request->question_id,
     
      ]);

      return back();


    }
  
}
