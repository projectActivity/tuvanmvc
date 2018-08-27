<?php 

namespace App\Repositories\ArticleType;

use App\Repositories\ArticleType\ArticleTypeRepositoryInterface;
use App\Repositories\EloquentRepository;

class ArticleTypeEloquentRepository extends EloquentRepository implements ArticleTypeRepositoryInterface
{
	public function model()
	{
		return \App\Models\ArticleType::class;
	}

	public function getAllArticleTypes()
	{
		$query = $this->model->select(['id', 'title']);

		return $query->get();
	}
}
