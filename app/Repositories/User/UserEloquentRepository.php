<?php 

namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Repositories\User\UserRepositoryInterface;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{
	public function model()
	{
		return \App\Models\User::class;
	}

	public function getAll($full_name = false, $email = false)
	{
		$query = $this->model->select();

		if ($full_name) {
			$query->orderBy('full_name', 'asc');
		}

		if ($email) {
			$query->orderBy('email', 'asc');
		}

		return $query->get();
	}
}
