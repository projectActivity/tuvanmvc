<?php

namespace App\Http\Resources\OCounseling;

use Illuminate\Http\Resources\Json\JsonResource;

class OCounselingResource extends JsonResource
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
