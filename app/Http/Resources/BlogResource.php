<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        // return [
        //     'blog_id' => $this->id,
        //     'blog_title' => $this->title,
        //     'thumbnail' => $this->thumbnail,
        //     'blog_content' => $this->content,
        // ];
        
    }
}
