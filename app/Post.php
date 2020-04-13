<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	# table name for posts
    protected $table = 'posts';

    protected $fillable = ['user_id', 'image', 'title', 'body'];

    /* Relation */

    // One to many rel with user model
    public function owner() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class, 'post_id');
    }


    /**
    * get show post route 
    *
    * @return string
    */

    public function path()
    {
    	return "/posts/{$this->id}";
    }

}
