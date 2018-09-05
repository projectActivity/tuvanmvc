<?php 

namespace App\Repositories\Service;

use App\Repositories\EloquentRepository;
use App\Repositories\Service\ServiceRepositoryInterface;

class ServiceEloquentRepository extends EloquentRepository implements ServiceRepositoryInterface
{
	const DISPLAY_SERVICE = 1;

	public function model()
	{
		return \App\Models\Service::class;
	}

	public function getAllServices()
	{
		$query = $this->model->select();

		return $query->get();
	}
}
