<?php

namespace App\Http\Resources\Ver1;

use App\Models\ExtraData;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TestsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection->map(function($item){
                return [
                    'title'=>$item->title,
                    'shortDescriptions' => $item->shortDescriptions,
                    'source'=>ExtraData::where('id',$item->id)->get('source')
                ];
            }),
        ];
    }
}
