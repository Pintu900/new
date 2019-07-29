<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;
use App\User;
use Auth;
class QuestionController extends Controller
{
  public function create(){
     $categories= Category::all();
    return view('question.create',compact('categories'));
  }
  public function store(Request $request){
    $rules=[
        'title'=>'required',
        'category_id'=>'required',
        'description'=>'required',
        'file'=> 'required|mimes:jpeg'
    ];
    $this->validate(request(),$rules);
    if($request->has('file')){
    $file_name=$request->file->store('img');
    }else{
      $file_name=null;
    }
    Question::create([
        'user_id'=>auth()->user()->id,
     'category_id'=>request('category_id'),
     'title'=>request('title'),
     'slug'=>str_slug(request('title')),
     'description'=>request('description'),
     'file'=>$file_name
     

  ]);
  session()->flash('success','Data has been saved');
  return back();
  }

  public function show($id){
   $ques= Question::with(['answers','answers.user'])->find($id);
   return view('question.show',compact('ques'));
  }
  
  public function edit($id)
  {
    return 'hello';
  }
}
