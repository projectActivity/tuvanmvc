<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
  protected $table = 'calendars';

  public function category()
  {
  	return $this->hasOne(\App\Models\Category::class, 'category_id');
  }
}
