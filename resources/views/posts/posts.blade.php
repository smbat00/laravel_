@extends('layouts.app')
@section('content')
<a href="{{route('post_list')}}">Post List</a>
<h1>post lis</h1>
    @foreach($postList as $single_post)
        <h1>{{$single_post->title}}</h1>
        <p>{{$single_post->description}}</p>
    @endforeach
@endsection
