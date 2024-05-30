<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArananResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return (object) [
            'id' => $this->id,
            'aranan' => $this->aranan,
            'indonesian' => $this->indonesian,
            'img' => $this->img,
            'type' => $this->type,
            'parent_id' => $this->parent_id,
            'is_open' => false,
        ];
    }
}
