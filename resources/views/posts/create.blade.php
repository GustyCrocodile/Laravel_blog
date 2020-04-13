@extends('layouts.app')

@section('stylesheets')

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  	tinymce.init({
  		selector:'textarea',
  		menubar: false
  	});
  </script>

@endsection

@section('title', 'Create new post')

@section('heading', 'Create new post')

@section('content')

	<div class="card shadow">
		<div class="card-body">
			<div class="card-text">
				@include('posts.partials.create_post')
			</div>
		</div>
	</div>

@endsection