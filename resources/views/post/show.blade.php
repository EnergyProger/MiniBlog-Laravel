@extends('template.main')

@section('content')
<div class="showPage">
    <div class="showPage__image">
        <img src="{{asset('assets/images/'.$post->img)}}" alt="">
    </div>
    <div class="showPage__content">
        <h2>{{$post->title}}</h2>
        <p>{{$post->updated_at}}</p>
        <p class="text">{{$post->description}}</p>
    </div>
</div>
@endsection