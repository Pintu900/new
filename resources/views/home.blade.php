@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="row my-5">
         <div class="col-md-8 mx-auto">
             @foreach($questions as $task) 
               <div class="card card-body shadow mb-4">
                  <div class="media">
     
                     <div class="mr-3 text-center my-3">
                           <div>
                           <form method="POST" action="/question/{{ $task->id }}/upvote">
                           @csrf
                               <button type="submit" class="btn btn-primary btn-sm btn-block">
                               <i class="fa fa-thumbs-up"></i>
                               </button>
                           </form>
                           </div>
                               {{$task->votes}}

                             <div>
                             <form method="POST" action="/question/{{ $task->id }}/downvote">
                             @csrf
                               <button type="submit" class="btn btn-primary btn-sm btn-block">
                               <i class="fa fa-thumbs-down"></i>
                               </button>
                               </form>
                             </div>
                      </div>
     
                      <div class="media-body">
                          <a href="{{route('show', $task->id)}}">  <h4> {{$task->title}}</h4></a>
                           <p>{{str_limit($task->description, 200)}}</p>
                           <span class="badge badge-pill badge-primary"> {{$task->user->name}}</span>
                           <span class="badge badge-pill badge-primary">{{$task->category->name}}</span>
                         <a href="/question/{{$task->id}}/edit">Edit</a>

                      </div>

                   </div>
               </div>
             @endforeach
         </div>
    </div>
</div>

@endsection
