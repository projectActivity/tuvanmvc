<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class ArticleType extends Model
{
    protected $table = 'article_types';

    protected $fillable = [
    	'id',
    	'title'
    ];

    protected $hidden = [
    	'created_at', 
    	'updated_at'
    ];

    public function catagory()
    {
    	return $this->hasOne(Category::class);
    }
}
