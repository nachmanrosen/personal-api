<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Institution extends JsonResource
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
            'type'=>'institutions',
            'id' => $this->id,
            'attributes' => ['school'=>$this->school,
            'date'=>$this->date,
            'subject'=>$this->subject, ]
        ];
    }
}
