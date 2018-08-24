<?php 

namespace App\Repositories\Tag;

use App\Repositories\EloquentRepository;

class TagEloquentRepository extends EloquentRepository implements TagRepositoryInterface
{
	public function model()
	{
		return \App\Models\Tag::class;
	}

	public function getAllTags()
	{
		$query = $this->model->select(['id', 'name', 'description']);
		$query->orderBy('name', 'desc');

		return $query->get();
	}
}
