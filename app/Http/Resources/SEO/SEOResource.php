<?php

namespace App\Http\Resources\SEO;

use Illuminate\Http\Resources\Json\JsonResource;

class SEOResource extends JsonResource
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

    public function with($request) 
    {
        return [
            'version' => '1.0.0',
            'author'  => 'Kuon Vu'
        ];  
    }
}
