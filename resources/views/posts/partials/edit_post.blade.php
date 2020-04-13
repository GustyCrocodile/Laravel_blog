<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PATCH')

	<div class="form-group">
		<label for="title">Post title</label>
		<input 
			type="text"
			name="title"
			id="title"
			class="form-control"
			value="{{ $post->title }}"
			required />

		@if ($errors->has('title'))
			<small class="text-danger">{{ $errors->first('title') }}</small>
		@endif
	</div>

	<div class="form-group">
		<label for="title">Post image</label>
		<input type="file" name="image" class="form-control" value="{{ $post->image }}" required>
		@if ($errors->has('image'))
			<small class="text-danger">{{ $errors->first('image') }}</small>
		@endif
	</div>

	<div class="form-group">
		<label for="body">Post body</label>
		<textarea 
			class="form-control" 
			name="body" 
			id="body" 
			rows="3"
			placeholder="write post body here.."
			required
			style="resize: none;">{{ $post->body }}</textarea>

		@if ($errors->has('body'))
			<small class="text-danger">{{ $errors->first('body') }}</small>
		@endif
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Update Post</button>
		<a href="{{ route('index') }}" class="btn btn-default">Back</a>
	</div>

</form>