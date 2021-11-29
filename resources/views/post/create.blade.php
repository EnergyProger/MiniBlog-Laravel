@extends('template.main')

@section('content')
<div class="row justify-content-center mt-5">
<form class="w-50" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Enter title...">
  </div>
  @error('title')
   <span class="text-danger-message">{{$message}}</span>
  @enderror

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description...">
  </div>
  @error('description')
   <span class="text-danger-message">{{$message}}</span>
  @enderror

  <div class="form-group">
    <label for="img">Example file input</label>
    <input type="file" class="form-control-file" id="img" name="img">
  </div>

  @error('img')
   <span class="text-danger-message">{{$message}}</span>
  @enderror
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection