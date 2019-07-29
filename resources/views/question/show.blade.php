@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3">
    <div class="col-md-8 mx-auto">
   <div class="card card-body shadow mb-4">
                 <h4> {{$ques->title}}</h4>
                 {{$ques->description}}
                <p>{{$ques->user->name}}</p>
                @if($ques->file)
                <p><img class="img-fluid" src="{{url('storage/'.$ques->file)}}"/></p>
                @endif
                      <span class="badge badge-pill badge-primary">{{$ques->category->name}}</span>
                      
                   </div>
     </div>
    </div>
</div>

<div class="container">
@foreach($ques->answers as $answer)
    <div class="row ">
    <div class="col-md-8 mx-auto">
    <div class="card card-body shadow mb-4">
    <p>{{$answer->answer}}</p>
<span class="badge badge-pill badge-primary">{{$answer->user->name}}</span>
                      
      </div>
     </div>
    </div>
    @endforeach
</div>

<div class="container">
    <div class="row mb-3">
    <div class="col-md-8 mx-auto">
   <div class="card card-body shadow mb-4">
   <form method="POST" action="{{route('answer.store')}}">
    @csrf
    <input type="hidden" name="question_id" value="{{$ques->id}}">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Answer here...</label>
    <textarea class="form-control @error('answer') is-invalid @enderror" name="answer"  rows="3"></textarea>
    @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
  <input type="submit" class="btn btn-primary mb-2 px-4" value="Post"/>
</form>       
                      
        </div>
     </div>
    </div>
</div>



@endsection