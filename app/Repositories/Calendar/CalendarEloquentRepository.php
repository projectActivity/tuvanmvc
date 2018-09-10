<?php 

namespace App\Repositories\Calendar;

use App\Repositories\Calendar\CalendarRepositoryInterface;
use App\Repositories\EloquentRepository;

class CalendarEloquentRepository extends EloquentRepository implements CalendarRepositoryInterface
{
	public function model() 
	{
		return \App\Models\Calendar::class;
	}

	public function getAllCalendars() 
	{
		$query = $this->model->select();

		return $query->get();
	}
}