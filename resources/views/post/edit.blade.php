@extends('template.main')

@section('content')
<div class="row justify-content-center mt-5">
  
<form class="w-50" action="{{route('posts.update',$post)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$post->title}}">
  </div>
  @error('title')
   <span class="text-danger-message">{{$message}}</span>
  @enderror

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{$post->description}}">
  </div>
  @error('description')
   <span class="text-danger-message">{{$message}}</span>
  @enderror

  <div class="form-group">
    <label for="img">Old image</label>
    <input type="hidden" name="oldImage" value="{{$post->img}}">
    <img class="imageForm" src="{{asset('storage/assets/img_posts/'.$post->img)}}" alt="">
  </div>

  <div class="form-group">
    <label for="img">Example file input</label>
    <input type="file" class="form-control-file" id="img" name="img">
  </div>
  @error('img')
   <span class="text-danger-message">{{$message}}</span>
  @enderror

  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>

@endsection