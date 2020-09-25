<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    public function user()
    {
      return $this->belongsTo('App\User')->orderBy('created_at', 'DESC');
    }
    public function likes()
    {
      return $this->belongsToMany('App\User', 'likes')->withPivot('is_dislike')->withTimestamps();
    }
    public function comments()
    {
      return $this->belongsToMany('App\User', 'comments')->withPivot('comments')->withTimestamps();
    }
}
