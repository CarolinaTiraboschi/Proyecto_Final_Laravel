<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function comments()
    {
      return $this->HasMany(Comment::class, 'post_id');
    }

    public function categories()
    {
      return $this->belongsToMany(Category::class,'category_post', 'post_id', 'category_id');
    }

    public function users()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
