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

	public function getAll($page, $limix = 10, $full_name = false, $email = false)
	{
		$query = $this->model->select('id', 'full_name', 'email', 'address', 'avatar', 'phone', 'sex', 'birthday');

		if ($full_name) {
			$query->orderBy('full_name', 'asc');
		}

		if ($email) {
			$query->orderBy('email', 'asc');
		}

		$datas = $query->get();

		foreach ($datas as $key => $value) {
			$value->delete = route('admin.user.destroy', $value->id);
			$value->edit = route('admin.user.edit', $value->id);
		}

		return $datas;
	}
}
