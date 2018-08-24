<?php 

namespace App\Repositories\Position;

use App\Repositories\EloquentRepository;
use App\Repositories\Position\PositionRepositoryInterface;

class PositionEloquentRepository extends EloquentRepository implements PositionRepositoryInterface
{
	public function model()
	{
		return \App\Models\Position::class;
	}

	public function getAllPositions()
	{
		$query = $this->model->select(['id', 'name']);
		$query->orderBy('id', 'asc');

		return $query->get();
	}

}
