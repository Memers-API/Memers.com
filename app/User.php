<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
      return $this->hasMany('App\Post');
    }
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function likes()
    {
      return $this->belongsToMany('App\Post', 'likes')->withPivot('is_dislike')->withTimestamps();
    }
    public function like(Post $post_id, $id)
    {
      $user = auth()->user($id);
      return $user->likes()->attach($post_id);

    }
    public function unlike(Post $post_id, $id)
    {
      $user = auth()->user($id);
      return $user->likes()->detach($post_id);
    }
    public function comments()
    {
      return $this->belongsToMany('App\Post', 'comments')->withPivot('comments')->withTimestamps();
    }
    /**  or
    public function likes() {
    // a user likes many posts via the 'likes' table
    return $this-belongsToMany(Post::class, 'likes');
}
public function like(Post $post) {
    return $this-likes()->attach($post);
}
public function unlike(Post $post) {
    return $this-likes()->detach($post);
}
*/


}
