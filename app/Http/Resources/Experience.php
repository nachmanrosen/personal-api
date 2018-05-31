<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Experience extends JsonResource
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
                'type'=>'experience',
                'id' => $this->id,
                'attributes'=> [
                'jobTitle' => $this->jobTitle,
                'employer' => $this->employer,
                'date'=>$this->date,]
        ];
        }
}
