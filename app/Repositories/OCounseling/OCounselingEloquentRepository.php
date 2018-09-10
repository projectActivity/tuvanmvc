<?php 

namespace App\Repositories\OCounseling;

/**
 * 
 */
class OCounselingEloquentRepository extends EloquentRepository implements OCounselingRepositoryInterface
{
	
	public function model()
	{
		return \App\Models\OCounseling::class;
	}

	public function getAllOCounselings()
	{
		$query = $this->model->select();

		return $query->get();
	}
}
