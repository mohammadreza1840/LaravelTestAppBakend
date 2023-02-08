<?php

namespace App\Http\Resources\ver1;

use Illuminate\Http\Resources\Json\JsonResource;

class Question extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title'=>$this->title,
            'descriptions'=>$this->descriptions,
            'test_id'=>$this->test_id,
            'indicator_id'=>$this->indicator_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,  
            'answers'=> new AnswerCollection($this->answers),
        ];
    }
}
