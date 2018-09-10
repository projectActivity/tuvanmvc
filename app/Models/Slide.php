<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
  protected $table = 'slides';

  protected $fillable = [
  	'id', 
  	'image', 
  	'url',
  	'is_display',
  	'position'
  ];

  protected $hidden = [
  	'created_at',
  	'updated_at',
  	'created_by',
  	'updated_by'
  ];
}
