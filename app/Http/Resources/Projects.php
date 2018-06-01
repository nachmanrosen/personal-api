<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Projects extends JsonResource
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
            'type'=>'projects',
            'id' => $this->id,
            'attributes' => ['project'=>$this->project,
            'description'=>$this->description,
            'url'=>$this->url,
            'github code'=>$this->githubCode,
            'skills used'=>$this->skillsUsed, ]
        ];
    }
}
