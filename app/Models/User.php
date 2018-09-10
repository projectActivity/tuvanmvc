<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Education;
use App\Models\Position;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'full_name', 
    'email', 
    'password',
    'address',
    'birthday',
    'sex',
    'position_id',
    'education_id',
    'experience',
    'avatar',
    'post_id',
    'phone',
    'introduction',
    'created_at',
    'updated_at'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function education()
  {
    return $this->belongsTo(Education::class, 'education_id');
  }

  public function position()
  {
    return $this->belongsTo(Position::class, 'position_id');
  }

  public function post()
  {
    return $this->belongsTo(\App\Models\Post::class, 'post_id');
  }
}
