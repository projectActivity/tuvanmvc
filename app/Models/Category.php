<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'id', 
    	'title', 
    	'image',
    	'description',
    	'is_display',
    	'article_type_id',
    	'link',
    	'is_top',
    	'created_at',
    	'updated_at'
    ];

    public function articleType()
    {
        return $this->belongsTo(ArticleType::class, 'article_type_id');
    }
}
