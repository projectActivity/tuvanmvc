<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
    	$this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getAllUsers();
        return UserResource::collection($users); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['password'] = empty($data['password']) ? '$2y$05$Swwp9/fEzEtPju2tRyVnBu9xtWnuNXhJJELqzClTIy8dESbY93k5e' : $data['password'];
        // $user = $request->isMethod('put') ? $this->userRepository->update($data, $data['user_id']) : $this->userRepository->create($data);

        $data['password'] = '$2y$05$Swwp9/fEzEtPju2tRyVnBu9xtWnuNXhJJELqzClTIy8dESbY93k5e';
        $user = $this->userRepository->create($data);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        unset($data['user_id']);
        $this->userRepository->update($data, $id);

        $user = $this->userRepository->findOrFail($id);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findOrFail($id);
        if ($this->userRepository->delete($id)) {
            return new UserResource($user);
        }
    }
}
