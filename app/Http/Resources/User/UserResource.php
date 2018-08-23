<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'full_name'    => $this->full_name,
            'email'        => $this->email,
            'address'      => $this->address,
            'birthday'     => $this->birthday,
            'sex'          => $this->sex,
            'position'     => $this->position_id,
            'education'    => $this->education_id,
            'experience'   => $this->experience,
            'avatar'       => $this->avatar,
            'post_id'      => $this->post_id,
            'phone'        => $this->phone,
            'introduction' => $this->introduction,
            'delete'       => route('api.user.destroy', $this->id),
            'edit'         => route('api.user.edit', $this->id),
        ];
    }

    public function with($request) 
    {
        return [
            'version' => '1.0.0',
            'author'  => 'Kuon Vu'
        ];  
    }
}
