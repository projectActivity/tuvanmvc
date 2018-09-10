<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';

  public function articleType()
  {
  	return $this->hasOne(\App\Models\ArticleType::class, 'article_type_id');
  }  
}
