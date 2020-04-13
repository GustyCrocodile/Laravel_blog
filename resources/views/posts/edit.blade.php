@extends('layouts.app')


@section('title')

	Edit Post | {{ $post->title }}

@endsection

@section('stylesheets')

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  	tinymce.init({
  		selector:'textarea',
  		menubar: false
  	});
  </script>

@endsection

@section('content')

	@include('posts.partials.edit_post')

@endsection