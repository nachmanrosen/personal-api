<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sk extends JsonResource
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
            'type'=> 'skills',
            'id' => $this->id,
            'attributes' => [
            'category'=>$this->category,]
        ];
    }
}
