<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'              => $this->id,
            'title'           => $this->title,
            'slug'            => $this->slug,
            'summary'         => $this->summary,
            'content'         => $this->content,
            'image'           => $this->image,
            'is_delete'       => $this->is_delete,
            'is_display'      => $this->is_display,
            'article_type_id' => $this->article_type_id,
            'view'            => $this->view,
            'publicshed'      => $this->publicshed
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
