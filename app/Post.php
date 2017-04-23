<?php

namespace App;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
      $this->comments()->create(compact('body'));
    }
}
