<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->question == null) dd($this);
        return [
            'answer' => $this->question->answer->shuffle(),
            'question' => $this->question->unsetRelation('answer'),
            'current_answer' => $this->answer,
            'explanation' => $this->question->explanation,
        ];
    }
}
