<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class formato2 extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'data1' => $this->data1,
            'data2' => $this->data2,
        ];
    }
}
