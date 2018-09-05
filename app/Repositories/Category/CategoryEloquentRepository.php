<?php 

namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	const DISPLAY = 1;
	const DELETE = 1;

	public function model()
	{
		return \App\Models\Category::class;
	}


	public function getAllCategories() 
	{
		$query = $this->model->select(['id', 'title', 'image', 'description', 'is_display', 'article_type_id', 'link', 'is_top', 'created_at', 'updated_at']);

		$query->where('is_delete', '!=', self::DELETE);

		return $query->get();
	}
}
