<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tag\TagRepositoryInterface;
use App\Http\Resources\Tag\TagResource;

class TagController extends Controller
{
	protected $tagRepository;

	public function __construct(TagRepositoryInterface $tagRepository)
	{
		$this->tagRepository = $tagRepository;
	}

    public function index()
    {
    	$tags = $this->tagRepository->getAllTags();
    	return TagResource::collection($tags);
    }
}
