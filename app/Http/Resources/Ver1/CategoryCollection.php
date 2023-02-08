<?php

namespace App\Http\Resources\Ver1;

use App\Http\Resources\ExtraDataCollection;
use App\Models\ExtraData;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
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
                    'source'=>ExtraData::where('id',$item->extra_data_id)->get('source')
                ];
            }),
        ];
    }
}
