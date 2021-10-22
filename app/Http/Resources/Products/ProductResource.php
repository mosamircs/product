<?php

namespace App\Http\Resources\Products;
use App\Models;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'price' =>$this->price,
            'variation' => VariationResource::collection($this->variations),
            'types'=> TypeResource::collection($this->types),
        ];
    }
}
