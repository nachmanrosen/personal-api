<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class getPosts extends JsonResource
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
            'type'=>'posts',
            'id' => $this->id,
            'attributes'=> [
            'username' => $this->username,
            'post' => $this->post,
            ]
    ];
    }
}
