@extends('layouts.app')

@section('title', 'Admin')

@section('heading', 'Blōg')

@section('description', '')

@section('content')

<div class="clearfix">
    <h2 class="float-left">All Posts</h2>
@auth
    <a href="{{ route('posts.create') }}" class="btn btn-link float-right">Create new post</a>
@endauth
</div>
    
@forelse ($posts as $post)

    <div class="card m-2 shadow-sm">
        <div class="card-body">

            <h2 class="post-title">
              <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </h2>

            <p class="card-text">

                <!-- post owner -->
                <small class="float-left">By: {{$post->owner->name}}</small>
                
                <!-- creation time -->
                <small class="float-right text-muted">{{ $post->created_at->format('M d, Y h:i A') }}</small>
                
                @if (auth()->id() == $post->owner->id )
                    <!-- edit post link -->
                    <small class="float-right mr-2 ml-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="float-right">edit your post</a>
                    </small>
                @endif
            </p>
        </div>
    </div>

@empty

    <p>No post yet</p>

@endforelse

@endsection
