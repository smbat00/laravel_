
@extends('layouts.app')
@section('content')
    <form action="{{route('addNewPostAction')}}" method="POST">
        @csrf
        <input type="text" name="title">
        <textarea name="description">  </textarea>
        <input type="submit" value="Save">
    </form>
    <a href="{{route('post_list')}}">Post List</a>
@endsection
