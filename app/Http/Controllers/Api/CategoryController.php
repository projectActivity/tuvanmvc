<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Http\Resources\Category\CategoryResource;

class CategoryController extends Controller
{
	protected $categoryRepository;

	public function __construct(CategoryRepositoryInterface $categoryRepository) 
	{
		$this->categoryRepository = $categoryRepository;
	}

  public function index()
  {
  	$categories = $this->categoryRepository->getAllCategories();

  	return CategoryResource::collection($categories);
  }

  public function store(Request $request) 
  {

  }

  public function edit($id) 
  {
  	$category = $this->categoryRepository->findOrFail($id);
  	return new CategoryResource($category);
  }

  public function update(Request $request, $id)
  {
    $data = $request->all();
    unset($data['id']);
    if ($this->categoryRepository->update($data, $id)) {
      $category = $this->categoryRepository->findOrFail($id);
      return new CategoryResource($category);
    }
  }

  public function destroy($id)
  {
    $category = $this->categoryRepository->findOrFail($id);
    if ($this->categoryRepository->delete($id)) {
      return new CategoryResource($category);
    }
  }
}
