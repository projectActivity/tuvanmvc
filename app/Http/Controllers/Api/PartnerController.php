<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Partner\PartnerRepositoryInterface;
use App\Http\Resources\Partner\PartnerResource;

class PartnerController extends Controller
{
    protected $partnerRepository;

    public function __construct(PartnerRepositoryInterface $partnerRepository)
    {
    	$this->partnerRepository = $partnerRepository;
    }

    public function index()
    {
    	$partners = $this->partnerRepository->getAllPartners();

    	return PartnerResource::collection($partners);
    }
}
