<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleTypeResource;
use App\Repositories\ArticleType\ArticleTypeRepositoryInterface;

class ArticleTypeController extends Controller
{
	protected $articleTypeRepository;

	public function __construct(ArticleTypeRepositoryInterface $articleTypeRepository)
	{
		$this->articleTypeRepository = $articleTypeRepository;
	}

    public function index()
    {
    	$articleTypes = $this->articleTypeRepository->getAllArticleTypes();

    	return ArticleTypeResource::collection($articleTypes);
    }
}
