<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Service\ServiceRepositoryInterface;
use App\Http\Resources\Service\ServiceResource;

class ServiceController extends Controller
{
	protected $serviceRepository;

	public function __construct(ServiceRepositoryInterface $serviceRepository)
	{
		$this->serviceRepository = $serviceRepository;
	}

  	public function index() 
  	{
  		$services = $this->serviceRepository->getAllServices();
  		return ServiceResource::collection($services);
  	}
}
