@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask Here...</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form  method="POST" action="{{route('store1')}}" enctype="multipart/form-data">
                    @csrf
  <div class="form-group ">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control form-control @error('title') is-invalid @enderror"  name="title" placeholder="What is Laravel?">
    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
      <option>Example select</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control @error('title') is-invalid @enderror" name="description"  rows="3"></textarea>
    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
  <input type="file" class=" my-4 "  name="file"/>
  @error('file')
                                    <span  class="text-danger" role="alert">
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
</div>

@endsection
