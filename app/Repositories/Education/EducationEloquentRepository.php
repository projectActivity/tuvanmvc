<?php 

namespace App\Repositories\Education;

use App\Repositories\EloquentRepository;
use App\Repositories\Education\EducationRepositoryInterface;

class EducationEloquentRepository extends EloquentRepository implements EducationRepositoryInterface 
{
	public function model()
	{
		return \App\Models\Education::class;
	}

	public function getAllEducations()
	{
		$query = $this->model->select('id', 'name');
		$query->orderBy('id', 'asc');

		return $query->get();
	}
}
