<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Calendar\CalendarResource;
use App\Repositories\Calendar\CalendarRepositoryInterface;

class CalendarController extends Controller
{
    protected $calendarRepository;

    public function __construct( CalendarRepositoryInterface $calendarRepository) 
    {
    	$this->calendarRepository = $calendarRepository;
    }

    public function index() 
    {
    	$calendars = $this->calendarRepository->getAllCalendars();

    	return CalendarResource::collection($calendars);
    }
}
