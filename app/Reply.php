<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    # table name

    protected $table = 'replies';

    protected $fillable = ['user_id', 'comment_id', 'body'];

    # relations

    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function comment()
    {
    	return $this->belongsTo(Comment::class, 'comment_id');
    }
}
