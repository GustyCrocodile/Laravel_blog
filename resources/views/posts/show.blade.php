@extends('layouts.app')

@section('title')

	View Post | {{ $post->title }}

@endsection

@section('background', '/images/' . $post->image)

@section('heading', $post->title)

@section('post-date')
	
	Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at->format('M d, Y H:i:s') }}

@endsection


@section('content')

	{!! $post->body !!}

	<hr>

	@include('posts.partials.comments')

@endsection