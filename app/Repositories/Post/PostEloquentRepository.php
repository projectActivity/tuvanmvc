<?php 

namespace App\Repositories\Post;

use App\Repositories\EloquentRepository;
use App\Repositories\Post\PostRepositoryInterface;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface 
{
	const POST = 1;
	const SERVICE = 2;
	const SERVICE_DELIVERY_PROCESS = 3;
	const ABOUT_CONTACT = 4;

	public function model()
	{
		return \App\Models\Post::class;
	}

	public function getPostsByTitle($title = 0)
	{
		$query = $this->model->select()->where('is_delete', 0);

		switch ($title) {
			case 0:
				break;
			case 1:
				$query->where('article_type_id', '=', self::POST);
				break;
			case 2: 
				$query->where('article_type_id', '=', self::SERVICE);
				break;
			case 3:
				$query->where('article_type_id', '=', self::SERVICE_DELIVERY_PROCESS);
				break;
			case 4:
				$query->where('article_type_id', '=', self::ABOUT_CONTACT);
				break;
		}

		return $query->get();
	}
}
