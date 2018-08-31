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

	public function getAllUsers()
	{
		$query = $this->model->with('position')->with('education');
		$query->orderBy('id', 'desc');

		// if ($full_name) {
		// 	$query->orderBy('full_name', 'asc');
		// }

		// if ($email) {
		// 	$query->orderBy('email', 'asc');
		// }

		return $query->paginate(10);
		// return $query->get();
	}

	public function formatUser(array $data)
	{
		unset($data['position'], $data['education'], $data['id'], $data['edit'], $data['delete']);

		return $data;
	}
}
