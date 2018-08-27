<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'title' => $this->title,
            'image' => $this->description,
            'is_display' => $this->is_display,
            'article_type' => $this->articleType,
            'link' => $this->link,
            'is_top' => $this->is_top,
            'edit' => route('api.category.edit', $this->id),
            'delete' => route('api.category.destroy', $this->id)
        ];
    }
}
