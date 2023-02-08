<?php

namespace App\Http\Resources\ver1;

use App\Models\Indicator;
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
            'indicator'=>Indicator::where('id',$this->indicator_id)->get('title'),
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,  
            'answers'=> new AnswerCollection($this->answers),
            //new IndicatorCollection($this->indicators)
        ];
    }
}
