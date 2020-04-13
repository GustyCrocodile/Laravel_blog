<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'title' => 'required|min:1|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'body' => 'required|min:1|max:2000'
    	]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

    	$post = Post::create([
    		'user_id' => auth()->id(),
    		'title' => request()->title,
            'image' => $imageName,
    		'body' => request()->body
    	]);

    	return redirect($post->path());
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    public function edit(Post $post)
    {
    	return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post)
    {
    	$this->validate(request(), [
    		'title' => 'required|min:1|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'body' => 'required|min:1|max:2000'
    	]);

        if (request()->image) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            $post->update([
                'image' => $imageName
            ]);
        }



    	$post->update([
    		'title' => request()->title,
    		'body' => request()->body
    	]);

    	return redirect($post->path());
    }

    

}
