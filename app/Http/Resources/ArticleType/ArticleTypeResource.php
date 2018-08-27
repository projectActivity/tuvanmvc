<?php

namespace App\Http\Resources\ArticleType;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleTypeResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title
        ];
    }
}
