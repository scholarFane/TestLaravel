@extends('layouts.app')

@section('content')
	<a href="/blogs/public/posts" class="btn btn-default">Go back</a>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<p>{{$post->body}}</p>
	
@endsection