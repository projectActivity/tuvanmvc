<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Education\EducationResource;
use App\Repositories\Education\EducationRepositoryInterface;

class EducationController extends Controller
{
	protected $educationRepository;

	public function __construct(EducationRepositoryInterface $educationRepository)
	{
		$this->educationRepository = $educationRepository;
	}

  public function index()
  {
  	$educations = $this->educationRepository->getAllEducations();
  	return EducationResource::collection($educations);
  }
}
