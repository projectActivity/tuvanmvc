<?php 

namespace App\Repositories\Partner;

use App\Repositories\EloquentRepository;
use App\Repositories\Partner\PartnerRepositoryInterface;

class PartnerEloquentRepository extends EloquentRepository implements PartnerRepositoryInterface
{
	public function model()
	{
		return \App\Models\Partner::class;
	}

	public function getAllPartners()
	{
		$query = $this->model->select();

		return $query->get();
	}
}
