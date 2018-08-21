<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
	protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
    	$this->userRepository = $userRepository;
    }

    public function index()
    {
    	return $this->userRepository->getAll();
    }
}
