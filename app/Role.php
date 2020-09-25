<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $guarded = [];
  protected $fillable = ['role_id', 'name', 'description'];
  protected $table = 'roles';
  protected $primaryKey = 'role_id';

  public function users(){
     return $this->belongsToMany('App\User');
 }
}
