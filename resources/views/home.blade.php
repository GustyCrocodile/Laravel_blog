@extends('layouts.app')

@section('title', 'Blog')

@section('background', 'img/home-bg.jpg')

@section('heading', 'Blōg')

@section('content')

@auth
    <a href="{{ route('posts.create') }}" class="btn btn-primary float-top" >Create new post</a>
@endauth

@forelse ($posts as $post)

    <div class="post-preview">
        <a href="{{ route('posts.show', $post->id) }}">
            <h2 class="post-title">
                {{ $post->title }}
            </h2>
            <p> {{ substr( strip_tags($post->body), 0, 300 ) }} {{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }} </p>
        </a>
        <p class="post-meta">
            Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at->format('M d, Y H:i:s') }}
        </p>
        <p class="post-meta">
            @if (auth()->id() == $post->owner->id )
                <a href="{{ route('posts.edit', $post->id) }}" >Edit your post</a>
            @endif
        </p>
    </div>

@empty
    
    <div class="post-preview">
        <h2>No posts yet</h2>   
    </div>

@endforelse

@endsection
