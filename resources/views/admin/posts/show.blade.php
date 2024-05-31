@extends('layouts.admin')
@section('title', $post->title)

@section('content')
<section>
    <h1>{{$post->title}}</h1>

    <p>{{$post->content}}</p>
    <img src="{{$post->image}}" alt="{{$post->title}}">
</section>
@endsection
