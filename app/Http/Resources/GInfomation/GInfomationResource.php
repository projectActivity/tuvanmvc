<?php

namespace App\Http\Resources\GInfomation;

use Illuminate\Http\Resources\Json\JsonResource;

class GInfomationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
