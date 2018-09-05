<?php 

namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	const DISPLAY = 1;
	const DELETE = 1;
	const TOP = 1;
	const LOAIDICHVU = 2;

	public function model()
	{
		return \App\Models\Category::class;
	}

	public function getAllCategories() 
	{
		$query = $this->model->select();
		$query->where('is_delete', '!=', self::DELETE);

		return $query->get();
	}

	public function getCategoriesByServices()
	{
		$query = $this->model->select();
		$query->where('article_type_id', '=', self::LOAIDICHVU)->where('is_delete', '!=', self::DELETE);

		return $query->get();
	}
}
