<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Position\PositionResource;
use App\Repositories\Position\PositionRepositoryInterface;

class PositionController extends Controller
{
	protected $positionRepository;

	public function __construct(PositionRepositoryInterface $positionRepository)
	{
		$this->positionRepository = $positionRepository;
	}

    public function index()
    {
    	$positions = $this->positionRepository->getAllPositions();
    	return PositionResource::collection($positions);
    }
}
