<?php

namespace App\Http\Resources\Service;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'is_mode'     => $this->is_mode,
            'is_display'  => $this->is_display,
            'edit'        => 'edit',
            'delete'      => 'delete'
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
