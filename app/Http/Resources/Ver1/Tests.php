<?php

namespace App\Http\Resources\Ver1;

use App\Http\Resources\ver1\QuestionCollection;
use App\Models\ExtraData;
use Illuminate\Http\Resources\Json\JsonResource;

class Tests extends JsonResource
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
            'id'=>$this->id,
            'title'=> $this->title,
            'shortDescriptions'=>$this->shortDescriptions,
            'longDescriptions'=>$this->longDescriptions,
            'isActive'=>$this->isActive,
            'category_id'=>$this->category_id,
            'image_source'=>ExtraData::find($this->extra_data_id)->source,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'questions'=> new QuestionCollection($this->questions),
        ];
    }
}
