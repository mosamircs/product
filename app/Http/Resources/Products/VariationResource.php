<?php

namespace App\Http\Resources\Products;

use Illuminate\Http\Resources\Json\JsonResource;
class VariationResource extends JsonResource
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
            //'type'=>TypeResource::collection($this->types),
            //'option'=> OptionResource::collection($this->options),
            'price'=>$this->price,
            'inc'=>$this->increment,
            'types'=>TypeResource::collection($this->types),
            'options'=>OptionResource::collection($this->options),
        ];
    }
}
