<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    # table name for comments model
    protected $table = 'comments';

    protected $fillable = ['user_id', 'post_id', 'body'];

    # relations 

    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function post() 
    {
    	return $this->belongsTo(Post::class, 'post_id');
    }

    public function replies()
    {
    	return $this->hasMany(Reply::class, 'comment_id');
    }
}

