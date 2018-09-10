<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Post\PostRepositoryInterface;
use App\Http\Resources\Post\PostResource;

class PostController extends Controller
{
	protected $postRepository;

	public function __construct(PostRepositoryInterface $postRepository)
	{
		$this->postRepository = $postRepository;
	}

	public function index(Request $request)
	{
		$article_type_id = $request->get('article_type_id', 0);
		$posts = $this->postRepository->getPostsByTitle($article_type_id);

		return PostResource::collection($posts);
	}
}
