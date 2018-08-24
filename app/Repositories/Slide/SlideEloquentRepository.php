<?php 

namespace App\Repositories\Slide;

use App\Repositories\EloquentRepository;

class SlideEloquentRepository extends EloquentRepository implements SlideRepositoryInterface
{
	public function model()
	{
		return \App\Models\Slide::class;
	}

	public function getAllSlides()
	{
		$query = $this->model->select(['id', 'image', 'url', 'is_display', 'position']);
		$query->orderBy('created_at', 'desc');
		$query->orderBy('updated_at', 'desc');

		return $query->get();
	}
}
