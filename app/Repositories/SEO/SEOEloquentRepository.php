<?php 

namespace App\Repositories\SEO;

use App\Repositories\EloquentRepository;
use App\Repositories\SEO\SEORepositoryInterface;

class SEOEloquentRepository extends EloquentRepository implements SEORepositoryInterface
{
	public function model()
	{
		return \App\Models\SEO::class;
	}

	public function getAllSEOs()
	{
		$query = $this->model->select();

		return $query->get();
	}
}