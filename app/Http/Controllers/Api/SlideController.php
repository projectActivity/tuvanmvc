<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Slide\SlideRepositoryInterface;
use App\Http\Resources\Slide\SlideResource;

class SlideController extends Controller
{
	protected $slideRepository;

	public function __construct(SlideRepositoryInterface $slideRepository)
	{
		$this->slideRepository = $slideRepository;
	}

    public function index()
    {
    	$slides = $this->slideRepository->getAllSlides();
    	return SlideResource::collection($slides);
    }
}
