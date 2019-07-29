@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
    <div class="col-md-8 mx-auto">
    @foreach($search as $task)
    <div class="card card-body shadow mb-4">
                   <a href="{{route('show', $task->id)}}">  <h4> {{$task->title}}</h4></a>
                      {{$task-> description}}
                      <p>{{$task->user->name}}</p>
                      <span class="badge badge-pill badge-primary">{{$task->category->name}}</span>
                      
                   </div>
        @endforeach
 </div>
    </div>
</div>

@endsection