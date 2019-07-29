<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionVoteController extends Controller
{
    public function upVote($id)
    {
      $question= Question::findOrFail($id);
      $question->votes++;
     $question->save();
     return back();
    }
    public function downVote($id)
    {
      $question= Question::findOrFail($id);
      if($question->votes > 0){
        $question->votes--;
        $question->save();
      }
     
     return back();
    }
}
