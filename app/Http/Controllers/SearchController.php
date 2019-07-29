<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class SearchController extends Controller
{
  public function search()
  {
    $q=request('query');
  $search=Question::where('title','like','%'.$q.'%')->orWhere('description','like','%'.$q.'%')->get();
   return view('question.search',compact('search'));
  }
}
